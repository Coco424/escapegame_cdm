<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class EquipeController24 extends Controller
{
    public function create()
    {
        return view('infos24e');
    }
 
    public function store(Request $request)
    {
       //return 'Le nom est ' . $request->input('nom');
        //return redirect('equipevi5');
    }
}