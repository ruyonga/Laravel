<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about(){

        /*PASSING DATA TO VIEW
         * */
       // $name = 'Ruyonga Daniel';
//        return view('pages.about')->with('name',$name);
//        return view('pages.about')->with([
//            'first' => 'Jeffrey',
//            'last' => 'Way'
//        ]);

        //COMPACT OOPTION
        $first = "Ruyonga";
        $last = "Daniel";

//        return view('pages.about',compact('first','last'));

           // $people = ['Mum', 'Asha', 'Lisa'];
        $people = [];
        return view('pages.about',compact('people', 'first', 'last'));



    }


    public function contact(){
      return view('pages.contact');
    }
}
