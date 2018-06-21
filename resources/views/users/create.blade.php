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
                            <div class="form-group row {{ $errors->has('txtfname') ? ' has-error' : '' }}">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">First Name</label>
                            <div class="col-md-6">
                                <input id="txtfname" type="text" class="form-control" name="txtfname">
                                    @if($errors->has('txtfname'))
                                        <span class="msg-error">{{$errors->first('txtfname')}}</span>
                                    @endif
                            </div>  
                        </div>

                        <div class="form-group row {{ $errors->has('txtlname') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">Last Name</label>
                            <div class="col-md-6">
                                <input id="txtlname" type="text" class="form-control" name="txtlname">
                                    @if($errors->has('txtlname'))
                                        <span class="msg-error">{{$errors->first('txtlname')}}</span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('txtuname') ? ' has-error' : '' }}">
                            <label for="uname" class="col-md-4 col-form-label text-md-right">Username</label>
                            <div class="col-md-6">
                                <input id="txtuname" type="text" class="form-control" name="txtuname">
                                    @if($errors->has('txtuname'))
                                        <span class="msg-error">{{$errors->first('txtuname')}}</span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('txtcnum') ? ' has-error' : '' }}">
                            <label for="cnum" class="col-md-4 col-form-label text-md-right">Contact Number </label>
                            <div class="col-md-6">
                                <input id="txtcnum" type="text" class="form-control" name="txtcnum">
                                    @if($errors->has('txtcnum'))
                                        <span class="msg-error">{{$errors->first('txtcnum')}}</span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('txtemail') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="txtemail" type="email" class="form-control" name="txtemail">
                                     @if($errors->has('txtemail'))
                                        <span class="msg-error">{{$errors->first('txtemail')}}</span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('radutype') ? ' has-error' : '' }} radioButton">
                            <label><input type="radio" name="radutype" value="0">User</label>
                            <label><input type="radio" name="radutype" value="1">Admin</label><br>
                                    @if($errors->has('radutype'))
                                        <span class="msg-error">{{$errors->first('radutype')}}</span>
                                    @endif
                        </div>

                        <div class="form-group row mb-0 btncontainer">
                            <div class="col-md-6 offset-md-4 regbutton">
                                <button type="submit" class="btn btn-primary regbuttonsize">Add User</button>
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

