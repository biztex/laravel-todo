<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function ipv6form()
    {
        return view('index');
    }
    public function validateForm(Request $request)
    {
        $request->validate([
            'ip_address' => 'required|ipv6',
        ]);
        dd('Form submitted successfully!');
    } 
}
