<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function  index() {
        $json_data = File::get(public_path('data.json'));
        $data = json_decode($json_data, true);
        return view('home', compact('data'));
    }
    public function  contact_us() {
        return view('contact');
    }
    public function  about_us() {
        return view('about');
    }
    public function appoinment(Request $request){
        dd($request->all());
    }
}
