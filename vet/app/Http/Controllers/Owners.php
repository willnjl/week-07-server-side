<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class Owners extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        
       
        $data = [
            "owners" => $owners
        ];

        return view("owners", $data);
    }
}
