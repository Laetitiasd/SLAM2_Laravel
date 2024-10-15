<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller {
	
	public function saisirIdentifiants(){
		return view( 'connexion' ) ;
	}
		public function seConnecter( Request $req ){
			return $req -> input( 'login' )
					. "/"
					. $req -> input( 'mdp' ) ;
			}
		}

