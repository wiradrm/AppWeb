<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    function about(){
      return view('about');
    }
    function hobbies(){
      $hobbies = [
        "Membaca",
        "Menulis",
        "Berenang",
        "Menabung",
        "Menyanyi",
        "Tidur"
      ];

      return view('hobbies', compact('hobbies'));
    }
}
