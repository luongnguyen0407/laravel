<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $user = DB::table('users')->select(['email', 'username'])->get();
        // $user = DB::table('users')->select(['email', 'username'])->where(['id' => 3, 'email' => 'test@gmail1.com'])->first();
        // $user = DB::table('users')->select(['email', 'username'])->find(3);
        // $user = DB::table('users')->count();
        // $user = DB::table('users')->max('id');
        // where('user_create', 'like', "%iphone%")
        // $user = DB::table('comment')->join('users', 'users.id', '=', 'comment.user_create')->where('user_create', '=', 3)->get();
        // dd($user);
        // return view('user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return redirect('user') or;
        // return redirect()->route('user.index');
        DB::table('users')->insert([
            'email' => 'test@gmail1.com',
            'username' => 'luong0407',
            'password' => bcrypt('luong'),
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "this is show" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
