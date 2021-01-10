<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        $comics = config('comics');
        
        
        /**
         * get slug
         */
        
        foreach ($comics as $key => $comic) {
            // titolo convertito in slugsd
            $slug = Str::slug($comic['title'], '-');
           
            $comics[$key]['slug'] = $slug;
            $comic[$key]['ciao'] = 'ciao';
            
            
        }
        // dd($comics);
        
        
        return view('home', compact('comics'));

    }
}
