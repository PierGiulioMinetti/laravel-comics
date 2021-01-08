<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * DETAIL PAGE FOR COMIC ITEM
     */
    public function show($id){
        // return 'DETAIL PAGE FOR ID:' . $id; 

        $comics = config('comics');
        
        /**
         * GET SPECIFIC COMIC BY ID
         */
        $comic = [];
        foreach($comics as $item) {
            if($id == $item['id']){
                $comic[] = $item;
            }
        }
        return view('comics.show', compact('comic'));
    }
};
