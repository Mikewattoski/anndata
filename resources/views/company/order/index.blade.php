@extends('admin')
@section('head')
<p>Orders</p>
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
                                    {{-- <a href="/company/order/create" class="btn btn-info btn-md">
                                        <span class="glyphicon glyphicon-plus"></span>
                                      </a> --}}
                            <div class="content table-responsive table-full-width">
                               
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Quantity</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                     </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->buyer()->get()->first()->name}}</td>
                                        <td> {{ $order->Quantity }}</td>
                                        <td>{{$order->item()->get()->first()->name}}</td>
                                        {{-- <td> @if ($order->status)
                                   <span class="label label-success">success</span>
                                   @else
                                   <span class="label label-warning">pending</span>
                                   @endif</td> --}}
                                        <td>
                                         @if($order->confirm==1)
                                             {{-- {{  link_to_route('order.confirm','confirm',$order->id,['class'=>'btn btn-sm btn-success'] ) }} --}}
                                             <a class="btn btn-sm btn-success">Success</a>
                                             @else
                                             <a class="btn btn-sm btn-warning">pending</a>
                                             {{-- {{  link_to_route('order.pending','pending',$order->id,['class'=>'btn btn-sm btn-warning'] ) }} --}}
                                             @endif
                                              {{-- {{  link_to_route('order.show','show',$order->id,['class'=>'btn btn-sm btn-success'] ) }} --}}
                                          
                                        </td>
                                    </tr>
@endforeach
                                  

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
@endsection

