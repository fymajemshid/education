<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use DB;


class contactcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    $abc=DB::table('contact1')->get();
    return view('contact_displays',compact('abc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|regex:/^[a-zA-Z]+$/u|max:25',
            'email' =>'required|email|unique:users',
            'subject' => 'required|min:5',
            
            'message' => 'required|min:5',
            'phone' => 'required',
        ]);
        $contact1 =new contact();
   
        $contact1->name = $request->name;
        $contact1->email= $request->email;
    
        $contact1->subject = $request->subject;
        
        $contact1->message = $request->message;
        $contact1->phone = $request->phone;
        
        $res =$contact1->save();
        if($res){
            return back()->with('success','You have registered successfully');
            
        }
        else{
            return back()->with('fail','something to wrong');
        }
    

    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
