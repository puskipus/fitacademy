<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function addRequestPerusahaan(Request $request)
    {
        $data = [
            'email' => $request->email,
            'jenis' => "perusahaan",
        ];

        $email["email"] = $request->email;
        $email["title"] = "From admin";
        $email["body"] = "ini isi";

        $files = [
            public_path('files/Employee 101 - Cara Ampuh dan Efektif Meningkatkan Kinerja Karyawan.pdf'),
        ];

        Mail::send('landingPage.landingPerusahaan', $email, function($message)use($email, $files) {
            $message->to($email["email"], $email["email"])
                    ->subject($email["title"]);

            foreach ($files as $file){
                $message->attach($file);
            }

        });

        ModelsRequest::create($data);
        dd('Mail sent successfully');
    }
}
