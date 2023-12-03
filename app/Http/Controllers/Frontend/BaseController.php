<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $excludeIds = [1];
        $categories = Category::where('is_published', 1)
            ->whereNotIn('id', $excludeIds)
            ->with('subcategories')
            ->get();
        $sliders = Slider::all();
        $articles = Article::where('is_published', 'on')->with('categories')->get();
        $services = Service::where('is_published', 'on')->get();
        $galleries = Gallery::where('is_published', 'on')->get();

        View::share([
            'categories' => $categories,
            'sliders' => $sliders,
            'articles' => $articles,
            'galleries' => $galleries,
            'services' => $services,
        ]);
    }
}
