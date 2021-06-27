@extends('admin')
@section('head')
<p>Dashboard</p>
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
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">All Farmers</h4>
                
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
                        <th>Item</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Desc</th>
                        <th>Available till</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
      
@foreach ($use as $item)
@foreach ($item->userstock()->get() as $it)
    
              <tr>
                        <td>{{$it->item()->get()->first()->name}}</td>
                        <td>{{$it->farmer()->get()->first()->name}}</td>
                        <td>{{$it->quantity}}</td>
                        
                        <td>{{$it->price}}</td>
                        <td>{{$it->description}}</td>
                        <td>{{$it->available_till}}</td>
                        <td>
{{--                            
                                     {{  Form::open(['route' => ['product.destroy', $product->id],
                            'method'=>'DELETE'])  }}
                            {{  Form::button('',['type'=>'submit','class'=>'btn btn-sm btn-danger ti-trash','onclick'=>'return confirm("Are You Sure you want to delete it")'] ) }}
                             {{  link_to_route('product.edit','',$product->id,['class'=>'btn btn-sm btn-info ti-pencil'] ) }}
                             {{  link_to_route('product.show','',$product->id,['class'=>'btn btn-sm btn-primary ti-list'] ) }}

                            {{Form::close()}} --}}
                        <a href="/company/ordered/{{$it->id}}">Place Order</a>
                        </td>
                        @endforeach
    
                        @endforeach
                                            </tr>
                    
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endif
@endsection