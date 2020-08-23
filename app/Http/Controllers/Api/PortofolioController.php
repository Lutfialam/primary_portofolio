<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Portofolio;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PortofolioController extends Controller
{
    public function index()
    {
        $data = Portofolio::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        Portofolio::create([
            'name'  => $request->name,
            'age'   => $request->age,
            'phonsel_number' => $request->phonsel_number,
            'email' => $request->email,
            'title' => $request->title,
            'job_desk' => $request->job_desk
        ]);

        $data = [
            'status' => '201',
            'message' => 'data berhasil di simpan'
        ];
        return $data;
    }

    public function update($id, Request $request)
    {
        Portofolio::where('id', $id)->update([
            'name'  => $request->name,
            'age'   => $request->age,
            'phonsel_number' => $request->phonsel_number,
            'email' => $request->email,
            'title' => $request->title,
            'job_desk' => $request->job_desk
        ]);

        $data = [
            'status' => '201',
            'message' => 'data berhasil di updated'
        ];
        return $data;
    }

    public function activated($id)
    {
        Portofolio::where('activated', 'activated')->update([
            'activated'  => 'not activated'
        ]);

        Portofolio::where('id', $id)->update([
            'activated'  => 'activated'
        ]);

        $data = [
            'status' => '201',
            'message' => 'data berhasil di updated'
        ];
        return $data;
    }
}
