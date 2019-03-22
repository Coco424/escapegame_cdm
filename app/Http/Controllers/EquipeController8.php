<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class EquipeController8 extends Controller
{
    public function create()
    {
        return view('infos8e');
    }
 
    public function store(Request $request)
    {
       //return 'Le nom est ' . $request->input('nom');
        return redirect('equipeve3');
    }
}