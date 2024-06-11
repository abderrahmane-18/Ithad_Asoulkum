<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'reservations')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = Reservation::all();
        return view('admin.reservations.index', compact('data'));
    }
    public function destroy(Request $request, Reservation $obj)
    {
        try {
            $obj->delete();
            $status = true;
            $msg = __('dash.deleted_successfully');
        } catch (\Exception $e) {
            $status = false;
            $msg = $e->getMessage();
        }
        return response()->json(compact('status', 'msg'));
    }
}
