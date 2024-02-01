<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{

    public function index() {
        {
            //treni che sono in partenza dalla data odierna statica
            $trains = Train::where('orario_partenza', ">", '2024-01-31 00:00:00' )->get();
        }
        return view('welcome', compact('trains'));
    }
}
