@extends('admin')
@section('head')
<p>Sms box</p>
@endsection

@section('content')

<div class="content">
    
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <h5>Sms to: {{$no}}</h5>
    <form method="POST" action="/sendmail">
        @csrf
        <div class=" form-group ">
           
            <input required name="to" type="hidden" value="{{$no}}" class="form-control ">
        </div>
         <div class="form-group">
           
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea required name="body" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Sms</button>

    </form>
</div>
@endsection