@extends('admin')
@section('head')
<p>Create Profile</p>
@endsection

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create Profile</h4>
                            </div>
                              @if($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                                    @endif
                                    @if (session()->has('msg'))
                                    <div class="alert alert-success">
                                    {{session()->get('msg')}}
                                    </div>
                                    @endif
                                  
                            <div class="content">
								{!! Form::open(['url' => 'farmer/profile','files'=>'true']) !!}
                                    <div class="row">
                                       @include('farmer.feilds')
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                               {!! Form::close() !!}
                                                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection