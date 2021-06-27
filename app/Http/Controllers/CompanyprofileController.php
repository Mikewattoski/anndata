<?php

namespace App\Http\Controllers;

use App\Models\companyprofile;
use App\Models\User;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;
class CompanyprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->profile_complete)
        
// dd(Auth::user()->profile()->get());
        return view('company.profileview');
        else
        return redirect('company/profile/create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pro=new companyprofile;
        return view('company.profile',compact('pro'));
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
$request->validate([
	'name'=>'required',
	'number'=>'required',
	'Phone_no'=>'required|digits:10',
	'image'=>'image|required',
    
]);
//image upload
if($request->hasfile('image')){
$image=$request->image;
$image->move('upload',$image->getClientOriginalName());
}

companyprofile::create([
    'company_id'=>Auth::user()->id,
'name'=>$request->name,
'Company_no'=>$request->number,
'Phone_no'=>$request->Phone_no,
'image'=>$request->image->getClientOriginalName()
]);
$user=User::find(Auth::user()->id);
$user->profile_complete=1;
$user->save();
// Auth::user()->save();
//$request->session()->flash('msg','your profile is complete');

return redirect('/company/profile');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
