<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipationController extends Controller
{
   	public function annuler($num) {
		return "Participation a l'atelier $num annuler";	
	
}
	public function proceder($numA) {
		return "Proceder de la participation de l'atelier $num"  ;
	}
}
