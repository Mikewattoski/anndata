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
<div class="container">
    <center><h1 class="alert alert-success" role="alert">Please complete your profile!</h1>
    </center>
</div>


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
{{-- {{$use->first()->comprofile()->get()}} --}}
<div class="container">
    <br>
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">All Companies</h4>
                
            </div>
             @if (session()->has('msg'))
                    <div class="alert alert-success">
                    {{session()->get('msg')}}
                    </div>
                    @endif
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone_no</th>
                        <th>Company_no</th>
                        <th>Email</th>
                        <th>state</th>
                        {{-- <th>Available till</th> --}}
                    </tr>
                    </thead>
                    <tbody>
      
@foreach ($use as $item)
    
              <tr>
                        <td>{{$item->comprofile()->get()->first()->name}}</td>
                        <td>{{$item->comprofile()->get()->first()->Phone_no}}</td>
                        <td>{{$item->comprofile()->get()->first()->Company_no}}</td>
                        
                        <td>{{$item->email}}</td>
                        <td>{{$item->state()->get()->first()->name}}</td>
                        {{-- <td>{{$it->available_till}}</td> --}}
                        {{-- <td>
                           
                                     {{  Form::open(['route' => ['product.destroy', $product->id],
                            'method'=>'DELETE'])  }}
                            {{  Form::button('',['type'=>'submit','class'=>'btn btn-sm btn-danger ti-trash','onclick'=>'return confirm("Are You Sure you want to delete it")'] ) }}
                             {{  link_to_route('product.edit','',$product->id,['class'=>'btn btn-sm btn-info ti-pencil'] ) }}
                             {{  link_to_route('product.show','',$product->id,['class'=>'btn btn-sm btn-primary ti-list'] ) }}

                            {{Form::close()}}
                        </td> --}}
    
                        @endforeach
                                            </tr>
                    
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>
@endif
@endsection