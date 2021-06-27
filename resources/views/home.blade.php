@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{Auth::user()->role_id}}
            {{Auth::user()->state_id}}
               
                
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </>
                    @endif
                    {{ __('You are logged in!') }}
                </div> --}}
                @if(Auth::user()->role_id==1)
                @yield('content1') @else
                @yield('content2')}
                @endif
            
        
    </div>
</div>
@endsection
