<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function chatDashboard(){
        return inertia('ChatDashboard');
    }

    /* public function alunoDashboard(){
        return inertia('ChatDashboard');
    } */

    public function secretariaDashboard(){
       
        return view('secretaria.secretaria_dashboard');
    }

    public function principalDashboard(){
       
        return view('nutricionista.nutricionista_dashboard');
    }

    public function empresaDashboard(){
       
        return view('empresa.empresa_dashboard');
    }
}
