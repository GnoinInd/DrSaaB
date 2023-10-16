<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Senddata;


class aboutController extends Controller
{
    public function about()
    {
        // echo 'this is about page';
        return view('about');
    }
    public function sendData(Request $request)
    {
        $data = new Senddata;
        $data->fname = $request->input("fname");
        $data->lname = $request->input("lname");
        $data->email = $request->input("email");
        $data->mobile = $request->input("mobile");
        $totaldata = $data->save();

    }
}