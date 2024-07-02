<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'about')->first();
        view()->share('model', $this->model);
    }

    public function edit()
    {
        $about_us_ar = Setting::where('setting_key', 'about_us_ar')->first()->setting_value;
        $terms_ar = Setting::where('setting_key', 'terms_ar')->first()->setting_value;
        $privacy_ar = Setting::where('setting_key', 'privacy_ar')->first()->setting_value;

        $about_us_en = Setting::where('setting_key', 'about_us_en')->first()->setting_value;
        $terms_en = Setting::where('setting_key', 'terms_en')->first()->setting_value;
        $privacy_en = Setting::where('setting_key', 'privacy_en')->first()->setting_value;
        return  view('admin.about.form', compact('about_us_ar', 'terms_ar', 'privacy_ar', 'about_us_en', 'terms_en', 'privacy_en'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'about_us_ar' => 'required',
            'about_us_en' => 'required',
            'terms_ar' => 'required',
            'terms_en' => 'required',
            'privacy_ar' => 'required',
            'privacy_en' => 'required',
        ]);

        Setting::where('setting_key', 'about_us_ar')->first()->update(
            ['setting_value' =>  $request->about_us_ar]
        );
        Setting::where('setting_key', 'about_us_en')->first()->update(
            ['setting_value' =>  $request->about_us_en]
        );
        Setting::where('setting_key', 'terms_ar')->first()->update(
            ['setting_value' =>  $request->terms_ar]
        );
        Setting::where('setting_key', 'terms_en')->first()->update(
            ['setting_value' =>  $request->terms_en]
        );
        Setting::where('setting_key', 'privacy_ar')->first()->update(
            ['setting_value' =>  $request->privacy_ar]
        );
        Setting::where('setting_key', 'privacy_en')->first()->update(
            ['setting_value' =>  $request->privacy_en]
        );

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.home');

        return response()->json(compact('status', 'msg', 'url'));
    }
}
