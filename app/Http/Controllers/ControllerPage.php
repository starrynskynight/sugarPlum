<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPage extends Controller
{
    
    public function home()
    {
        return view('home');
    }
    
    public function collab()
    {
        return view('collab');
    }

    public function contact()
    {
        return view('contact');
    }

    public function profilepage()
    {
        return view('profilepage');
    }

    public function services()
    {
        return view('services');
    }
    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
