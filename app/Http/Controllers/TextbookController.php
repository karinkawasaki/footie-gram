<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextbookController extends Controller
{
    public function textbook() {
        return view('textbook');
    } 
}
