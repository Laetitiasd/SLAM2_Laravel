<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtelierController extends Controller
{
    
	public function programmes() {
		return "Programmes des ateliers";
}		
		
	public function passes() {
		return "Atelier passer";
}	
		
	public function voir($numAtelier) {
		return "Voir l'atelier numero :   $numAtelier" ;	
	
}
	public function commenter($numAtelier) {
		return "Commentaire de l'atelier numéro :  $numAtelier"  ;
	}
    
   
}
