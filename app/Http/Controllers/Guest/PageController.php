<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index(){


        // dd(now());
        // $trains = Train::all();
        $trains = Train::where('departure_time', '>=', now('Europe/Rome'))
                        ->where('cancelled', 0)
                        ->orderBy('departure_time', 'ASC')
                        ->get();


        // dd($trains);




        return view('home', compact('trains'));
    }
}
