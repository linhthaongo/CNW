<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journals;
class HomeController extends Controller
{
    public function getAllJournals()
    {
        $journals = Journals::all();
        //dd($articles);
        return view('home',compact('journals'));
    }
}


