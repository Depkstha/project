<?php

namespace App\Http\Controllers\Frontend;

class FrontendController extends BaseController
{
    public function home()
    {
        return view('frontend.pages.home');
    }

}
