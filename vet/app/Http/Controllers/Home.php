<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        date_default_timezone_set("Europe/London");
        $hour = date('H');

        if($hour >= 0 && $hour < 12){
            $greeting = "Good Morning";
            }else if($hour >= 12 && $hour < 17 ){
                $greeting = "Good afternoon";
            }else if($hour >= 17){
                $greeting = "Good afternoon";
        }

        $data = [
            "greeting" => $greeting,
            "hour" => $hour
        ];

        return view("welcome", $data);
    }
}
