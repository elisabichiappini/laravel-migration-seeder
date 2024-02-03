<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        {
            //prendi 3 treni dopo averli ordinati per n. di codice treno
            $trains = Train::orderByDesc('codice_treno')->take(5)->get();
        }
        return view('welcome', compact('trains'));
    }
    public function contacts() 
    {
        return view('contacts');
    }
}
