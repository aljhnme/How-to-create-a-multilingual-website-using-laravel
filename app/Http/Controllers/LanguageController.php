<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
   
   public function switchLanguage($lang)
   {
      if (array_key_exists($lang,Config::get('languages'))) 
      {
      	Session::put('c_applocale',$lang); 
      }

      return Redirect::back();
   }

   function ch_foinputf(Request $request)
   {
     $request->validate([
        'name'  => 'required',
        'email' => 'required|email',
        't_textm' => 'required',
     ]);
    
    return redirect()->back()->with('success',trans('messages.success_a'));

   }
}
