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
                    <form action="{{ url('/auction/create') }}" method="post">
    
                        {!! csrf_field() !!}
    
                        <div class="form-group has-feedback {{ $errors->has('pawn_ticket_no') ? 'has-error' : '' }}">
                            <label>Pawn Ticket No.</label>
                            <input value="{{ old('pawn_ticket_no') }}" class="form-control" type="text" name="pawn_ticket_no">
                            @if($errors->has('pawn_ticket_no'))
                            <span class="help-block"> {{ $errors->first('pawn_ticket_no') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('loan_date') ? 'has-error' : '' }}">
                            <label>Loan Date</label>
                            <input value="{{ old('loan_date') }}" class="form-control" type="text" name="loan_date">
                            @if($errors->has('loan_date'))
                            <span class="help-block"> {{ $errors->first('loan_date') }} </span>
                            @endif
                        </div>		
    
                        <div class="form-group has-feedback {{ $errors->has('principal') ? 'has-error' : '' }}">
                            <label>Principal</label>
                            <input value="{{ old('principal') }}" class="form-control" type="text" name="principal">
                            @if($errors->has('principal'))
                            <span class="help-block"> {{ $errors->first('principal') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('payments_made') ? 'has-error' : '' }}">
                            <label>Payments Made</label>
                            <input value="{{ old('payments_made') }}" class="form-control" type="number" name="payments_made">
                            @if($errors->has('payments_made'))
                            <span class="help-block"> {{ $errors->first('payments_made') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label>Description</label>
                            <input value="{{ old('description') }}" class="form-control" type="number" name="description">
                            @if($errors->has('description'))
                            <span class="help-block"> {{ $errors->first('description') }} </span>
                            @endif
                        </div>
    
                        <div class="form-group has-feedback {{ $errors->has('status') ? 'has-error' : '' }}">
                            <label>Status</label>
                            <input value="{{ old('status') }}" class="form-control" type="number" name="status">
                            @if($errors->has('status'))
                            <span class="help-block"> {{ $errors->first('status') }} </span>
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