<?php

namespace App\Http\Controllers;

use App\Models\farmerprofile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;

class FarmerprofileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->profile_complete)
        return view('farmer.profileview');
        else
        return redirect('farmer/profile/create');

    }
    public function create()
    {
        $pro=new farmerprofile;
        return view('farmer.profile',compact('pro'));
    }
    public function store(Request $request)
    {
        $request->validate([
	'name'=>'required',
	'number'=>'required|digits:12',
	'Phone_no'=>'required|digits:10',
	'image'=>'image|required',
    
]);
// dd($request);

//image upload
if($request->hasfile('image')){
$image=$request->image;
$image->move('upload',$image->getClientOriginalName());
}
$token = getenv("TWILIO_AUTH_TOKEN");
$twilio_sid = getenv("TWILIO_SID");
$twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
$twilio = new Client($twilio_sid, $token);
$twilio->verify->v2->services($twilio_verify_sid)
    ->verifications
    ->create('+91'.$request->Phone_no, "sms");
farmerprofile::create([
    'farmer_id'=>Auth::user()->id,
'name'=>$request->name,
'Aadhar_no'=>$request->number,
'Phone_no'=>$request->Phone_no,
'image'=>$request->image->getClientOriginalName()
]);
$user=User::find(Auth::user()->id);
$user->profile_complete=1;
$user->save();
// Auth::user()->save();
$request->session()->flash('msg','your profile is complete');
return redirect('/verify')->with(['phone_number' =>$request->Phone_no]);

}
}