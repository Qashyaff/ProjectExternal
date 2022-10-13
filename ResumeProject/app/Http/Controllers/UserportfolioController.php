<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Userportfolio;



class UserportfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user.listinguser',['users' => $user]);  
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userportfolio  $userportfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::findOrFail($id);
     
      echo "<strong>Name</strong> :".$user->name."<br>";
      echo "<strong>email</strong> :" .$user->email."<br>";
      echo "<strong>created_at</strong> :" .$user->created_at."<br>";
      //dd($user); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userportfolio  $userportfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Userportfolio $userportfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userportfolio  $userportfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userportfolio $userportfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userportfolio  $userportfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userportfolio $userportfolio)
    {
        //
    }
}
