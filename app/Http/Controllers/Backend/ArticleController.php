<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $trashedArticles = Article::onlyTrashed()->get();
        return view('admin.articles.all', [
            'articles' => $articles,
            'trashedArticles' => $trashedArticles,
            'title' => 'Article',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.new',
            [
                'categories' => $categories,
                'title' => 'Article',
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = uploadImage($request->image);
            $validatedData['image'] = $imagePath;
        };
        $validatedData['is_published'] = $request->is_published;
        $validatedData['tags'] = $request->tags;

        $article = Article::create($validatedData);
        if ($request->categories) {
            foreach ($request->categories as $category) {
                $article->categories()->attach($category);
            }
        }
        toastr()->success('Article has been saved!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', [
            'article' => $article,
            'categories' => $categories,
            'title' => 'Article',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, Article $article)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {

            if (file_exists($article->image)) {
                unlink($article->image);
            }

            $imagePath = uploadImage($request->image);
            $validatedData['image'] = $imagePath;
        };
        $validatedData['is_published'] = $request->is_published;
        $validatedData['tags'] = $request->tags;

        $article->update($validatedData);
        if ($request->categories) {
            $article->categories()->sync($request->categories);
        }
        toastr()->success('Article has been updated!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        if ($article) {
            $article->categories()->detach();
            $article->delete();
        }
        toastr()->success('Article has been deleted!');
        return redirect()->back();
    }
}
