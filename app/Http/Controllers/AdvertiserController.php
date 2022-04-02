<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Advertiser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdvertiserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    
        // return view('registationprof');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('add');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'mobile' => ['required', 'string','min:11', ],
            'bank_account' => ['required', 'string', 'min:9'],
            'id_photo' => ['required', 'string'],
            'national_id' => ['required', 'string', 'min:14'],
            'address' => ['required', 'string'],
            
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {$user=User::create([

        'name'=>$request['name'],
        'email'=>$request['email'],
        'password' => Hash::make($request['password']),
        'age'=>$request['age'],
        'mobile'=>$request['mobile'],
        'address'=>$request['address'],
        'isAdmin'=>'Advertiser'

    ]);

    Advertiser ::create([
        'user_id'=>$user['id'],
        'national_id'=>$request['national_id'],
        'id_photo'=>$request['id_photo'],
        'bank_account'=>$request['bank_account'],
        
    ]);
    return redirect(route('login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertiser  $advertiser
     * @return \Illuminate\Http\Response
     */
    public function show(Advertiser $advertiser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertiser  $advertiser
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertiser $advertiser)
    {
        return redirect(route('login'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertiser  $advertiser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertiser $advertiser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertiser  $advertiser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertiser $advertiser)
    {
        //
    }
}
