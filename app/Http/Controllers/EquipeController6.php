<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class EquipeController6 extends Controller
{
    public function create()
    {
        return view('infos6e');
    }
 
    public function store(Request $request)
    {
       //return 'Le nom est ' . $request->input('nom');
        return redirect('equipero4');
    }
}