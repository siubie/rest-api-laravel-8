<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index()
    {
        $data = [
            'name' => 'Demo',
            'version' => '1.0.0',
        ];
        return $data;
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'version' => $request->version,
        ];
        return $data;
    }

    public function update(Request $request)
    {
        return $request->all();
    }

    public function delete(Request $request)
    {
        return $request->all();
    }
}
