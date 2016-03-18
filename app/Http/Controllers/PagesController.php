<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about(){
        $name = 'Ruyonga Daniel';
//        return view('pages.about')->with('name',$name);
        return view('pages.about')->with([
            'first' => 'Jeffrey',
            'last' => 'Way'
        ]);
    }
}
