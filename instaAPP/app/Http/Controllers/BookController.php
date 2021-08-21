<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookmark() {
        return view('pages/bookmark');
    }
}
