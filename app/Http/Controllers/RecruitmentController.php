<?php

namespace App\Http\Controllers;

use App\Recruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required',
            'position' => 'required'
        ]);

        Recruitment::create($request->only(['name', 'company', 'position']));

        return redirect()->back()->with('success', 'Terima kasih telah merekrut saya, tunggu informasi selanjutnya ya! tidak akan lama kok');
    }
}
