<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::limit(81)->get();
         /* dd($trains);  */

        return view('home', compact("trains"));

    }
}
