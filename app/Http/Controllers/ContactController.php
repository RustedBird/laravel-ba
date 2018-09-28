<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index(Request $request)
   {
       if ($request->isMethod('POST'))
       {
           $request->flash();
       }
       return view('contact');
   }
}
