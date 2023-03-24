<?php

namespace App\Http\Controllers;

use App\Models\index;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view('about');
    }
    public function courses()
    {
        return view('courses');
    }
    
    public function contact()
    {
        return view('contact');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(index $index)
    {
        //
    }
}
