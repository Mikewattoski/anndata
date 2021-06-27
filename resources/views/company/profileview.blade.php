@extends('admin')
@section('head')
<p>My Profile</p>
@endsection

@section('content')
@php
$user=Auth::user()->comprofile()->get()->first();    
@endphp
{{-- {{$user}} --}}
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
                                    <th>company_id</th>
                                    <td>{{$user->Company_no}}</td>
                                </tr>

                                <tr>
                                    <th>Phone</th>
                                    <td>{{$user->Phone_no}}</td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td>{{Auth::user()->state()->get()->first()->name}}</td>
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
                
                 <a href="/home">
                <i class="btn btn-info btn-fill "><p>Back</p></i>
                
            </a>
            </div>
        </div>
    </div>
</div>
@endsection