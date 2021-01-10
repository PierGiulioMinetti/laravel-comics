<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * DETAIL PAGE FOR COMIC ITEM
     */
    public function show($slug){
        // return 'DETAIL PAGE FOR ID:' . $id; 

        $comics = config('comics');
        
        /**
         * GET SPECIFIC COMIC BY ID
         */
        $comic = [];
        foreach($comics as $item) {
            // title --> slug 
            $titleConverted = Str::slug($item['title'], '-');
            if ($slug == $titleConverted){
                $comic = $item;
                break ; //se trova l'elemento alla prima iterazione ferma il tutto esce
            }
        }

        // mostra errore se la pagina non viene trovata
        if(empty($comic)){
            abort(404);
        }

        return view('comics.show', compact('comic'));
    }
}
