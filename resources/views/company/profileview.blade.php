@extends('admin')
@section('head')
<p>My Profile</p>
@endsection

@section('content')
{{Auth::user()->comprofile()->get()->first()}}
@endsection