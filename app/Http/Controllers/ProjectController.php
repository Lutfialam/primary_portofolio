<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::paginate(5);
        return view('project.index', compact('data'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'github_link' => 'required',
            'built_at' => 'required',
            'tech' => 'required',
        ]);

        $image = $request->image;
        $new_image = time() . $image->getClientOriginalName();

        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => 'uploads/' . $new_image,
            'github_link' => $request->github_link,
            'built_at' => $request->built_at,
            'tech' => $request->tech,
        ]);

        $image->move('uploads/', $new_image);

        return redirect()->route('project.index')->with('add__success', 'data berhasil di tambah');
    }

    public function edit($id)
    {
        $data = Project::where('id', $id)->get();
        return view('project.edit', compact('data'));
    }

    public function show($id)
    {
        $data = Project::where('id', $id)->get();
        return view('project.detail', compact('data'));
    }

    public function update($id, Request $request)
    {
        Project::where('id', $id)->update($request->only(
            ['name', 'description', 'image', 'github_link', 'built_at', 'tech']
        ));

        return redirect()->route('project.index')->with('edit__success', 'data berhasil di edit');
    }

    public function destroy($id)
    {
        $data = Project::find($id);
        unlink($data->image);

        $data->delete();
        return redirect()->route('project.index')->with('delete__success', 'data berhasil di delete');
    }
}
