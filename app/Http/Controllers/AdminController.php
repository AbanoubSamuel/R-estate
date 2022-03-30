<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        // return view('sidebar.users');
        $data=User::all();
        return view("usersDash.usersDash", ['data'=>$data]);
    }
    
    public function delete($id)
    {
        $data=User::find($id);
        $data->delete();
        
        return redirect(route('admin'));
    }

    public function showuser()
    {  
     $data=User::where('isAdmin','Advertiser')->get();
        return view ('sidebar.advertisersTable',['data'=>$data]);

    }
    public function deluser($id)
    {
        // dd($id);
        $x=Advertiser::find($id);
        // dd($x->user);
        $x->user->delete();
        $x->delete();

        return  redirect(route('usersTable'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

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
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
        
    }
}
