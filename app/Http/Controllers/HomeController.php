<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
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
            'price_start' => 'required|numeric',
            'price_end' => 'required|numeric',
            'name' => 'nullable',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $data = $request->all();
        $reservation = Reservation::create($data);

        $status = true;
        $msg = __('front.application_success');

        return response()->json(compact('status', 'msg'));
    }
}
