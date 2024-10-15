<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController ;

use App\Http\Controllers\UtilisateurController ;
use App\Http\Controllers\ParticipationController;
use App\Http\Controllers\AtelierController;


Route::get('/', function () {
    return view('welcome');
});


// Clients

Route::get( '/clients/enregistrement' , [ ClientController::class , 'enregistrement' ] ) ;

Route::get( '/clients/enregistrer' , [ ClientController::class , 'enregistrer' ] );

Route::get( '/clients/connexion' , [ ClientController::class , 'connexion' ] ) ;

Route::get( '/clients/connecter' , [ ClientController::class , 'connecter' ] ) ;

Route::get( '/clients/espace' , [ ClientController::class , 'espace' ] ) ;

Route::get( '/clients/profil' , [ ClientController::class , 'profil' ] ) ;

Route::get( '/clients/deconnecter' , [ ClientController::class , 'deconnecter' ] ) ;


// Ateliers


Route::get( '/ateliers/programmes' , [ AtelierController::class , 'programmes' ] ) ;

Route::get( '/ateliers/passes' , [ AtelierController::class , 'passes' ] ) ;

Route::get( '/ateliers/{numAtelier}/commentaires/voir', [ AtelierController::class , 'voir' ] )->where('numAtelier', '[0-9]+');

Route::get( '/ateliers/{numAtelier}/commenter', [ AtelierController::class , 'commenter' ] ) ->where('numAtelier', '[0-9]+');

// Participation


 Route::get( '/participation/{numAtelier}/annuler', [ ParticipationController::class , 'annuler' ] )->where('numAtelier', '[0-9]+') ;

 Route::get( '/participation/{numAtelier}/proceder', [ ParticipationController::class , 'proceder' ] ) ->where('numAtelier', '[0-9]+');



//enregistrer une route qui sera exécutée lorsqu'aucune autre route ne correspond à la requête entrante
Route::fallback(function () { 
    return response()->view('errors.404', [], 404);
});


Route::get( '/contact' , function(){
	return view( 'contact' ) ;
}) ;

Route::get( '/animateurs/{num}' , function ( $num ) {
return view( 'animateur' ) -> with( 'num' , $num ) ;
} ) ;

Route::get( '/clients/{num}' , function ( $num ) {
return view( 'client' ) -> with( 'num' , $num ) ;
} ) ;



//route lier

Route::get( '/clients/{num}' , [ ClientController::class , 'consulter' ] ) ;


//route nommé
Route::get('/clients/{num}',[ClientController::class,'consulter']) -> name( 'voirClt' );

//Route en cas de paramètres optionnels
Route::get( '/clients/{num?}' , [ ClientController::class , 'consulter' ] ) ;

//route pour débuger
Route::get( '/clients/{num}/debug' , [ ClientController::class , 'index' ] ) ;

//Route pour la demande d'identifiants

Route::get('/utilisateurs/connexion',[UtilisateurController::class,'saisirIdentifiants']);

//Route a la connexion de l'identifiants
Route::post('/utilisateurs/seconnecter',[UtilisateurController::class,'seConnecter']) ;




