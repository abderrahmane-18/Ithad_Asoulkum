<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Models\ProjectModel;

class FaqPageController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'faqs')->first();
        view()->share('model', $this->model);
    }


    public function index()
    {
        $data = Faq::orderBy('created_at', 'desc')->get();
        return view('admin.faqs.index', compact('data'));
    }

    public function create()
    {
        return view('admin.faqs.form');
    }

    public function store(FaqRequest $request)
    {
        $data = $request->validated();
        Faq::create($data);
        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function edit(Faq $obj)
    {
        return view('admin.faqs.form', ['data' => $obj]);
    }

    public function update(FaqRequest $request, Faq $obj)
    {
        $data = $request->validated();
        $obj->update($data);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');
        return response()->json(compact('status', 'msg', 'url'));
    }

    public function destroy(Faq $obj)
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
