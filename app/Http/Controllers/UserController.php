<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Job;
use App\Models\Post;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        // $users = DB::select('select * from users ');
        $users = User::all();
        $phone = User::find(1)->phone;

        // dd($phone->phone);
        return view('users', ['users' => $users]);
    }

    public function phone()
    {


        return view('phone');
    }


    public function info( Request $Request )
    {

        $users = User::find( $Request->id );

        // dd($users);

        // if ($users->company->isEmpty()) {

        //    dd($users->company, 'HOLA');
        // }


        return view('info', [ 'users' => $users ]);
    }










    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $cities = City::all();



    //     return view('create', ['cities' => $cities]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {

    //     User::create([
    //          'city_id'  => $request->city_id,
    //          'name'     => $request->name,
    //          'email'    => $request->email,
    //          'active'   => 1
    //     ]);


    //      return redirect()->route('index');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function show(User $user)
    // {

    //     dd('hola', $user);
    //     return view('phone');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function edit(User $user)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, User $user)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function destroy(User $user)
    // {
    //     //
    // }
}
