<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      //session()->put(['edwin'=>'master instructor']);

        //return $request->session()->get('edwin');

        //session(['petras'=>'studentas']);
        
        //session(['edwin'=>'your teacher']);

       //return session('edwin');
        //return view('home');
       // $request->session()->forget('petras');

        // $request->session()->flush();

        // return $request->session()->all();

        //$request->session()->flash('message', 'Post has been created');

        //return $request->session()->get('message');

        // $request->session()->reflash();

        // $request->session()->keep('message');

    }
}
