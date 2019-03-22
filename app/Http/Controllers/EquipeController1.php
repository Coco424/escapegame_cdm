<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class EquipeController1 extends Controller
{
    public function create()
    {
        return view('infos');
    }
 
    public function store(Request $request)
    {
       //return 'Le nom est ' . $request->input('nom');
      //  return redirect()->action('EquipeController2@equipebl2');
        return redirect('equipebl2');
    }
}
