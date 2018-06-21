@extends('layouts.app')

{{-- @section('content') --}}
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<body>
        <div class="card-header loginbar">{{ __('ALT Login') }}</div> 
<div  class="loginbox">
        
        
<div class="center">

         
       
<form method="POST" action="{{ route('login') }}"  >
        @csrf

        <div class="form-group row">
            <label for="username" name="txtusername"  id= "txtusername" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>

            <div class="col-md-6">
                <input id="username"  type="string" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" id="txtpassword" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="checkbox">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-success">
                    {{ __('Login') }}
                </button>

                <a class="btn btn-link" id="forgotPassword"  href="{{ route('password.request') }}" >
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
        </div>
    </form>
</div>
</div>
<body>
{{-- 
@endsection --}}