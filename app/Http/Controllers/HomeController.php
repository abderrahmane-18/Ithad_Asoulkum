<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'service' => 'required|not_in:0',
            'type_service' => 'required|not_in:0',
            'city' => 'required',
            'price_start' => 'required',
            'price_end' => 'required',
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
        if ($request->input('service') == 0) {
            $status = false;
            $msg = __('front.service_error');
            return response()->json(compact('status', 'msg'));
        }


        $status = true;
        $msg = __('front.application_success');

        return response()->json(compact('status', 'msg'));
    }
}
