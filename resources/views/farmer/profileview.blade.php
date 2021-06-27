@extends('admin')
@section('head')
<p>My Profile</p>
@endsection

@section('content')
{{Auth::user()->famprofile()->get()->first()}}
@endsection