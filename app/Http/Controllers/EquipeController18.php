<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class EquipeController18 extends Controller
{
    public function create()
    {
        return view('infos18e');
    }
 
    public function store(Request $request)
    {
       //return 'Le nom est ' . $request->input('nom');
        return redirect('equipeve5');
    }
}