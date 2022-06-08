@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Stock</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-body">
                    <form action="{{ url('/inventory') }}" method="post">
    
                        {!! csrf_field() !!}
    
                        <div class="form-group has-feedback {{ $errors->has('item_type') ? 'has-error' : '' }}">
                            <label>Item Type</label>
                            <input value="{{ old('item_type') }}" class="form-control" type="text" name="item_type">
                            @if($errors->has('item_type'))
                            <span class="help-block"> {{ $errors->first('item_type') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('karat_gold') ? 'has-error' : '' }}">
                            <label>Karat Gold</label>
                            <input value="{{ old('karat_gold') }}" class="form-control" type="text" name="karat_gold">
                            @if($errors->has('karat_gold'))
                            <span class="help-block"> {{ $errors->first('karat_gold') }} </span>
                            @endif
                        </div>		
    
                        <div class="form-group has-feedback {{ $errors->has('kind_of_stone') ? 'has-error' : '' }}">
                            <label>Kind of Stone</label>
                            <input value="{{ old('kind_of_stone') }}" class="form-control" type="text" name="kind_of_stone">
                            @if($errors->has('kind_of_stone'))
                            <span class="help-block"> {{ $errors->first('kind_of_stone') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('weight') ? 'has-error' : '' }}">
                            <label>Weight</label>
                            <input value="{{ old('weight') }}" class="form-control" type="number" name="weight">
                            @if($errors->has('weight'))
                            <span class="help-block"> {{ $errors->first('weight') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('tag_price') ? 'has-error' : '' }}">
                            <label>Tag Price</label>
                            <input value="{{ old('tag_price') }}" class="form-control" type="number" name="tag_price">
                            @if($errors->has('tag_price'))
                            <span class="help-block"> {{ $errors->first('tag_price') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('amount') ? 'has-error' : '' }}">
                            <label>Amount</label>
                            <input value="{{ old('amount') }}" class="form-control" type="number" name="amount">
                            @if($errors->has('amount'))
                            <span class="help-block"> {{ $errors->first('amount') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Add new stock</button>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>
    



@endsection