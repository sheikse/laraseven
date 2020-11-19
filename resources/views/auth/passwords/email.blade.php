@extends('layouts.auth')

@section('title')
Reset Password
@endsection 

@section('content')
<div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="/" class="logo logo-admin"><img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">{{ __('Reset Password') }}</h5>
    
                        <form class="form-horizontal m-t-30" method="POST" action="{{ route('password.email') }}">
                        @csrf
                               <!--<div class="col-12">
                                    <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            Enter your <b>Email</b> and instructions will be sent to you!
                                        </div>
                               </div>-->

                                <div class="form-group">
                                        <div class="col-12">
                                                <label>{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">{{ __('Send Password Reset Link') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
@endsection                       