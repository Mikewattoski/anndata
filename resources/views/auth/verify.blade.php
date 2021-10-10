@extends('admin')
@section('head')
<p>Create Profile</p>
@endsection

@section('content')
<div class="container" style="position: relative; top:20%">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <img style="position: relative;left:30%" src="data:image/png;base64,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" alt="">
                <div style="position: relative;left:30%;font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:20px" class="card-header">{{ __('Verify Your Phone Number By Twelio') }}</div>
                <br>
                <div class="card-body" style="position: relative;left:5%;font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:15px">
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                    @endif
                    Please enter the OTP sent to your number: {{session('phone_number')}}
                    <form action="/verify" method="post">
                        @csrf
                        <div class="form-group row">
                            {{-- <label for="verification_code" class="col-md-4 col-form-label text-md-right">{{ __('By Twilio') }}</label> --}}
                            <div class="col-md-10">
                                <input type="hidden" name="phone_number" value="{{session('phone_number')}}" >
                                <input id="verification_code" type="tel"
                                    class="form-control @error('verification_code') is-invalid @enderror"
                                    name="verification_code" value="{{ old('verification_code') }}" required placeholder="OTP" style="border:1px solid #F22F46 !important">
                                @error('verification_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Verify Phone Number') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection