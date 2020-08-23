<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::all();
        $dat = [
            "status" => "200 ok",
            "data" => $data
        ];
        return response()->json($dat);
    }

    public function store(request $request)
    {
        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'github_link' => $request->github_link,
            'built_at' => $request->built_at,
            'tech' => $request->tech,
        ]);

        $data = [
            'status' => 201,
            'message' => 'data berhasil di tambah'
        ];

        return $data;
    }

    public function update($id, Request $request)
    {
        Project::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'github_link' => $request->github_link,
            'built_at' => $request->built_at,
            'tech' => $request->tech,
        ]);

        $data = [
            'status' => 201,
            'message' => 'data berhasil di update'
        ];

        return $data;
    }
}
