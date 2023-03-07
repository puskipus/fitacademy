<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function addRequestPerusahaan(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'jenis' => 'required',
        ]);

        // $data = $request->all();
    }
}
