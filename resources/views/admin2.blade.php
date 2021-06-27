@extends('admin')
@section('head')
<p>Create Profile</p>
@endsection

@section('content')
@if(Auth::user()->profile_complete==0)
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<h1>Please complete your profile for further procedure</h1>


<br><br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




@else
{{$use->first()->state()->get()}}

@endif
@endsection