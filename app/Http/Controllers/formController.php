<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indexform;

class formController extends Controller
{
    //public function index()

    public function indexform(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'molile' => 'molile',
        //     'subject' => 'subject',
        //     'message' => 'message',
        // ]);
        // $data = indexform::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'molile' => $request->molile,
        //     'subject' => $request->subject,
        //     'message' => $request->message,
        // ]);
        // if ($data) {
        //     echo "successful";
        //     # code...
        // } else {
        //     echo "error";
        // }
        $data = new indexform;
        $data->name = $request->input("name");
        $data->email = $request->input("email");
        $data->mobile = $request->input("mobile");
        $data->subject = $request->input("subject");
        $data->message = $request->input("message");
        $totaldata = $data->save();


    }

}
