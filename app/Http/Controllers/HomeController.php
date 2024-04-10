<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function  index(Request $request) {
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
        $price=$request->price;
        $email=$request->email;
        $time=$request->time;
        $json_data = File::get(public_path('data.json'));
        $data = json_decode($json_data, true);
        $item=null;
        foreach ($data as $SelectData) {
            if ($SelectData['id']==$request->id) {
                $item=$SelectData;
            }
        }
        return view('stripe',compact('item','time'));
    }
}
