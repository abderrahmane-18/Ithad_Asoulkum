<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about  = Setting::where('setting_key', 'about_us_' . getLocale())->first()->setting_value;
        $terms  = Setting::where('setting_key', 'terms_' . getLocale())->first()->setting_value;
        $privacy  = Setting::where('setting_key', 'privacy_' . getLocale())->first()->setting_value;

        return view('front.about', compact('about', 'terms', 'privacy'));
    }
}
