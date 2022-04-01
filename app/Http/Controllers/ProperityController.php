<?php

namespace App\Http\Controllers;

use App\Models\Properity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProperityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()['isAdmin']=='Admin'){
            $data=Properity::all();
        }else{
        $x=Auth::user()->advertiser;
        $data=$x->properity;
        }
        return view("Properity.Feed", ['data'=>$data]);
    }

    /**properity
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function create()
    {
        // $role=Auth::user()['isAdmin'];
        // if($role=='Admin' OR 'Advertiser'){

            return view('addForm.addForm');
        // }
        // else 
        // {
        
        //     return redirect(route('home'));
        // }
    }
    
    




    public function store(Request $request)
    {
       
        // $request->validate([
        //     'title'=>'required|max:10',
        //     'body'=>'required|min:10'
        // ]);
        $image=$request->file("image");
        $filePath = $request->file('image')->storeAs('images', $image, 'public');
       
        // dd($filePath);
      
        //    dd($id=Auth::user());
        //   dd(Auth::user());
        if (Auth::user()->advertiser) {
            $id=Auth::user()->advertiser["id"];
        } else {
            $id=Auth::id();
        }
        Auth::user()->advertiser;
        Properity::create([
            'name'=>$request['name'],
            'address'=>$request['address'],
            'price'=>$request['price'],
            'image'=>$filePath,
            'type'=>$request['type'],
            'status'=>'pending',
            'desc'=>$request['desc'],
            'Wi-Fi'=>$request['Wi-Fi'],
            'Air Conditioner'=>$request['Air Conditioner'],
            'advertiser_id'=>$id
        ]);
        
 

        //return (view('Properity.Feed'));

        return redirect(route('properities.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Properity  $properity
     * @return \Illuminate\Http\Response
     */

     
    public function show(Properity $properity)
    {
        return view("show.show", ['data'=>$properity]);
    }
    

    public function display()
    {
        $data=Properity::all();
        return view("results", ['data'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Properity  $properity
     * @return \Illuminate\Http\Response
     */
    public function edit(Properity $properity)
    {
        //dd($properity);
        return view("Properity.edit", ['properity'=>$properity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Properity  $properity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Properity $properity)
    {
        $image=now($request->file("image"))->getClientOriginalName();
        $filePath = $request->file('image')->storeAs('images', $image, 'public');
        // use here the method to move pics to storage
        $properity->update([
            // 'id'=>$request['id'],
            'name'=>$request['name'],
            'address'=>$request['address'],
            'price'=>$request['price'],
            'image'=>$filePath,
            'properity_type'=>$request['properity_type'],
            'number_of_beds'=>$request['number_of_beds'],
            'number_of_rooms'=>$request['number_of_rooms'],
            
           
        ]);
        return redirect(route('properities.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Properity  $properity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Properity $properity)
    {
        $properity->delete();
        return redirect(route('properities.index'));
    }

    public function status(Properity $status)
    {
        $status->update(['status'=>'approved']);
        return redirect(route('properities.index'));

    }     
    public function statu(Properity $status)
    {  
        $status->update(['status'=>'rejected']);
        return redirect(route('properities.index'));

     }



}
