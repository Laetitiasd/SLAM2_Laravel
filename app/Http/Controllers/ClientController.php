<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller {
	
	public function enregistrement() {
		return "Enregister le client";
	}		
		
	public function enregistrer() {
		return "Enregister le client";
	}	
		
	public function connexion() {
		return "Connexion client";	
	
	}
	public function connecter() {
		return "Client connecter";
	}
	
	public function espace() {
		return "Espace client";
	}
	
	public function profil() {
		return "Profil client";
	}
	
	public function deconnecter() {
		return "Client déconnecter";
	}
	
}


