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
        $data = [
            'name' => $request->name . '-updated',
            'version' => $request->version . '-updated',
        ];
        return $data;
    }

    public function delete(Request $request)
    {
        return response()->noContent();
    }
}
