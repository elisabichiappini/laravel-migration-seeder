<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
// add carbon library
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() {
        {
            //in welcome tutti i treni
            $trains = Train::all();
        }
        return view('welcome', compact('trains'));
    }
    public function contacts() {
        {
            //
        }
        return view('contacts');
    }
}
