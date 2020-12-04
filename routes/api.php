<?php
use App\Models\Commentaire;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
  
// Route::post('register', 'API\RegisterController@register');
  



    /**
     * Commentaires routes
     */
    Route::get('/commentaires','CommentaireController@getCommentaire');
    Route::post('/commentaires','CommentaireController@addCommentaire');