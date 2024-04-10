<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index(Request $request) {
        $search = $request->search;

        // Read JSON data
        $json_data = File::get(public_path('data.json'));
        $data = json_decode($json_data, true);

        // Filter data based on search query
        if ($search) {
            $filtered_data = [];
            foreach ($data as $item) {
                // Check if title or subtitle contains the search query
                if (stripos($item['title'], $search) !== false || stripos($item['subtitle'], $search) !== false) {
                    $filtered_data[] = $item;
                }
            }
            $data = $filtered_data;
        }

        // Paginate the data
        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get the current page or default to 1 if not set
        $pagedData = array_slice($data, ($currentPage - 1) * $perPage, $perPage);
        $data = new \Illuminate\Pagination\LengthAwarePaginator($pagedData, count($data), $perPage, $currentPage);
        // Append search query to pagination links
        $data->appends(['search' => $search]);
        return view('home', compact('data','search'));
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
