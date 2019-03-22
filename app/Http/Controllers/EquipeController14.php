<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class EquipeController14 extends Controller
{
    public function create()
    {
        return view('infos14e');
    }
 
    public function store(Request $request)
    {
       //return 'Le nom est ' . $request->input('nom');
        return redirect('equipevi3');
    }
}