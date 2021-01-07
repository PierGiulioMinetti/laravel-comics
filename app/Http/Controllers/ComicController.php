<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * DETAIL PAGE FOR COMIC ITEM
     */
    public function show($id){
        return 'DETAIL PAGE FOR ID:' . $id;
    }
};
