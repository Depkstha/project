<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $categories = Category::where('is_published', 1)->get();
        $sliders = Slider::all();

        View::share([
            'categories' => $categories,
            'sliders' => $sliders,
        ]);
    }
}
