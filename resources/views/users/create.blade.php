@extends('layouts.admin')
<link rel="stylesheet" href="{{asset('css/login.css')}}">

@section('content')
<div class="container">
<a href="/users" class="btn btn-default">Back</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Add User</div> --}}
                <div class="centerreg">

                <div class="card-body">
                <form method="POST" action="{{route('user.add')}}">
                        @csrf

                        
                            {{-- @if(count($errors) > 0)
                                @foreach($errors->all() as $error)
                                    <p class="alert alert-danger">{{$error}}</p>
                                @endforeach
                            @endif     --}}
                            <div class="form-group row {{ $errors->has('txtfname') ? ' has-error' : '' }}">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">First Name</label>
                            <div class="col-md-6">
                                <input id="txtfname" type="text" class="form-control " name="txtfname">
                                    @if($errors->has('txtfname'))
                                        <span class="msg-error">{{$errors->first('txtfname')}}</span>
                                    @endif
                            </div>  
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">Last Name</label>
                            <div class="col-md-6">
                                <input id="txtlname" type="text" class="form-control" name="txtlname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="uname" class="col-md-4 col-form-label text-md-right">Username</label>
                            <div class="col-md-6">
                                <input id="txtuname" type="text" class="form-control" name="txtuname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cnum" class="col-md-4 col-form-label text-md-right">Contact Number </label>
                            <div class="col-md-6">
                                <input id="txtcnum" type="text" class="form-control" name="txtcnum">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="txtemail" type="email" class="form-control" name="txtemail">
                            </div>
                        </div>

                        <div class="form-group row  radioButton" >
                            <label><input  type="radio" name="radutype" value="0">User</label>
                            <label><input type="radio" name="radutype" value="1">Admin</label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Add User</button>
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

