<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    public function index(){
        $mie_birre= Beer::All();
        $data=[
            'ciao' => $mie_birre
        ];
        return view('beer', $data);
    }
}
