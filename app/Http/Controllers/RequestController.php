<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function addRequestPerusahaan(Request $request)
    {
        $data = [
            'email' => $request->email,
            'jenis' => "perusahaan",
        ];

        ModelsRequest::create($data);
        return redirect()-back();
    }
}
