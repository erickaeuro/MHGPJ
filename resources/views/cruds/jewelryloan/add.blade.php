@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add new Jewelry Loan</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
        
                <div class="panel-body">
                    <form action="{{ url('/jewelryloan') }}" method="post">
    
                        {!! csrf_field() !!}
    
                        <div class="form-group has-feedback {{ $errors->has('firstname') ? 'has-error' : '' }}">
                            <label>First Name</label>
                            <input value="{{ old('firstname') }}" class="form-control" type="text" name="firstname">
                            @if($errors->has('firstname'))
                            <span class="help-block"> {{ $errors->first('firstname') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('lastname') ? 'has-error' : '' }}">
                            <label>Last Name</label>
                            <input value="{{ old('karat_gold') }}" class="form-control" type="text" name="lastname">
                            @if($errors->has('lastname'))
                            <span class="help-block"> {{ $errors->first('lastname') }} </span>
                            @endif
                        </div>		
    
                        <div class="form-group has-feedback {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label>Address</label>
                            <input value="{{ old('address') }}" class="form-control" type="text" name="address">
                            @if($errors->has('address'))
                            <span class="help-block"> {{ $errors->first('address') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('cpnum') ? 'has-error' : '' }}">
                            <label>Cellphone Number</label>
                            <input value="{{ old('cpnum') }}" class="form-control" type="number" name="cpnum">
                            @if($errors->has('cpnum'))
                            <span class="help-block"> {{ $errors->first('cpnum') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('birthdate') ? 'has-error' : '' }}">
                            <label>Birthdate</label>
                            <input value="{{ old('birthdate') }}" class="form-control" type="date" name="birthdate">
                            @if($errors->has('birthdate'))
                            <span class="help-block"> {{ $errors->first('birthdate') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('valid_id') ? 'has-error' : '' }}">
                            <label>Valid ID</label>
                            <input value="{{ old('valid_') }}" class="form-control" type="text" name="valid_id">
                            @if($errors->has('valid_id'))
                            <span class="help-block"> {{ $errors->first('valid_id') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Add new Jewelry Loan</button>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>
    



@endsection