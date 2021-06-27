@extends('admin')
@section('head')
<p>Stock</p>
@endsection

@section('content')
   <div class="col-md-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Orders</h4>
                                
                                <p class="category">List of all orders</p>
                            </div> @if (session()->has('msg'))
                                    <div class="alert alert-success">
                                    {{session()->get('msg')}}
                                    </div>
                                    @endif
                                    <a href="stock/create" class="btn btn-info btn-md">
                                        <span class="glyphicon glyphicon-plus"></span>
                                      </a>
                            <div class="content table-responsive table-full-width">
                               
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        {{-- <th>User</th> --}}
                                        <th>Quantity</th>
                                        <th>Item name</th>
                                        <th>Available till</th>
                                     </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        {{-- <td>{{$order->buyer()->get()->first()->name}}</td> --}}
                                        <td> {{ $order->quantity }}</td>
                                        <td>{{$order->item()->get()->first()->name}}</td>
                                        {{-- <td> @if ($order->status)
                                   <span class="label label-success">success</span>
                                   @else
                                   <span class="label label-warning">pending</span>
                                   @endif</td> --}}
                                        <td>
                                        {{$order->available_till}}</td>
                                    </tr>
@endforeach
                                  

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
@endsection

