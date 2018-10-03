<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
   public function index(Request $request)
   {
       if ($request->isMethod('POST'))
       {
           $request->flash();
       }

       $view = view('contact', ['title' => 'Hello world'])->render();

   /*    return (new Response($view))
           ->header('Content-type', 'newType')
           ->header('header-one', 'header');*/

//   return response($view)->header('Content-type', 'newType');
//   return response()->json(['name' => 'Philipp', 'page' => 'contact']);
//   return response()->download('robot.txt', 'name.txt');

//     return response($view)->withHeaders(['Test' => 'test']);
//     return redirect('/')->with('name', 'asdasd');

       return view('contact');
   }
}
