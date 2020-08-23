<?php

namespace App\Http\Controllers;

use App\Portofolio;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PortofolioController extends Controller
{
    public function index()
    {
        $data = Portofolio::paginate(5);
        return view('portofolio/index', compact('data'));
    }

    public function create()
    {
        return view('portofolio/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required',
            'phonsel_number' => 'required',
            'email' => 'required',
            'title' => 'required',
            'job_desk' => 'required',
        ]);

        Portofolio::create($request->only(
            ['name', 'age', 'phonsel_number', 'email', 'title', 'job_desk']
        ));

        return redirect()->route('portofolio.index')->with('add__success', 'data berhasil ditambah');
    }

    public function edit($id)
    {
        $data = Portofolio::where('id', $id)->get();
        return view('portofolio/edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        Portofolio::where('id', $id)->update($request->only(
            ['name', 'age', 'phonsel_number', 'email', 'title', 'job_desk']
        ));

        return redirect()->route('portofolio.index')->with('edit__success', 'data berhasil diupdate');
    }

    public function activated($id)
    {
        Portofolio::where('activated', 'activated')->update([
            'activated'  => 'not activated'
        ]);

        Portofolio::where('id', $id)->update([
            'activated'  => 'activated'
        ]);

        return redirect()->route('portofolio.index')->with('add__success', 'data berhasil diaktivasi');
    }

    public function delete($id)
    {
        Portofolio::where('id', $id)->delete();

        return redirect()->route('portofolio.index')->with('delete__success', 'data berhasil diaktivasi');
    }
}
