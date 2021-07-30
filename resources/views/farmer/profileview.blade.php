@extends('admin')
@section('head')
<p>My Profile</p>
@endsection

@section('content')
{{-- {{Auth::user()->famprofile()->get()->first()}} --}}
@php
$user=Auth::user()->famprofile()->get()->first();    
@endphp
{{-- {{$user}} --}}
<div class="container"><br>
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <tbody>

                                <tr>
                                    <th>ID</th>
                                    <td>{{$user->id}}</td>
                                </tr>

                                <tr>
                                    <th>Name</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                
                                <tr>
                                    <th>Aadhar_no</th>
                                    <td>{{$user->Aadhar_no}}</td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td>{{Auth::user()->state()->get()->first()->name}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$user->Phone_no}}</td>
                                </tr>

                                <tr>
                                    <th>Created At</th>
                                    <td>{{$user->created_at}}v</td>
                                </tr>

                                <tr>
                                    <th>Updated At</th>
                                    <td>{{$user->updated_at}}</td>
                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td><img src="/upload/{{$user->image}}" alt="img" class="img-thumbnail" style="width: 150px;"></td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                
                
            </div>
        </div>
    </div>
</div>
</div>
@endsection