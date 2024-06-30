<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoinRequest;
use App\Models\JoinUs;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class JoinUsController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'join_us')->first();
        view()->share('model', $this->model);
    }


    public function index()
    {
        $data = JoinUs::all();
        return view('admin.join_us.index', compact('data'));
    }

    public function show()
    {
        return view('front.join_us');
    }

    public function join(JoinRequest $request)
    {
        // $data = $request->except('fal');
        // $data['filepath'] = generalUpload($this->model->model, $request->fal);
        // $data['filename'] = $request->fal->getClientOriginalName();

        $data = $request->validated();
        JoinUs::create($data);

        $status = true;
        $msg = __('front.application_success');
        return response()->json(compact('status', 'msg'));
    }

    public function destroy(Request $request, JoinUs $obj)
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
