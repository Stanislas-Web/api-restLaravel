<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Commentaire;

class CommentaireController extends Controller
{
    public function getCommentaire(){
        return response()->json(Commentaire::all(), 200);
    }

    public function addCommentaire(Request $request ){
        $commentaire = Commentaire::create($request->all());

        return response($commentaire, 201);
    }
    //
}
