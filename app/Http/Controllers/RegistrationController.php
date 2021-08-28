<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('secondStep');
    }
    public function index3()
    {
        return view('thirdStep');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store1(request $request)
    {
        $cnt = registration::where('email',$request->input('email'))->get()->count();
        if($cnt > 0)
            return redirect('/')->with("existEmail","Email already exists!!");
        session()->put('firstName',$request->input('firstName'));
        session()->put('lastName',$request->input('lastName'));
        session()->put('email',$request->input('email'));
        session()->put('country',$request->input('country'));

        return view('secondStep');
     }


     public function store2(request $request)
     {
        //  checking unique User Name 
        $cnt = registration::where('userName',$request->input('userName'))->get()->count();
        if($cnt > 0)
             return redirect('secondStep')->with("existUser","User name already exist. try another!");

        //  checking confirmed password 
        if($request->input('password') != $request->input('confirmPassword'))
            return redirect('secondStep')->with("status","password doesn't match!");
        

        session()->put('userName',$request->input('userName'));
        session()->put('password',$request->input('password'));

        $data=session('email');
        
        return view('thirdStep',['data'=>session('firstName')],['data'=>session('lastName')],['data'=>session('email')],['data'=>session('country')],['data'=>session('userName')],['data'=>session('password')]);

     }

    public function finalStore()
    {
        $myTable = new registration;
        $myTable->firstName=session('firstName');
        $myTable->lastName=session('lastName');
        $myTable->email=session('email');
        $myTable->country=session('country');
        $myTable->userName=session('userName');
        $myTable->password=session('password');
        $myTable->save();

        return redirect('/')->with("success","Data Stored 
        Successfully!!");
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
