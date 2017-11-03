<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{       
    public function search($key_word) {
        return view('search', [
            'key_word' => $key_word, 
            ]);
    }  
}
