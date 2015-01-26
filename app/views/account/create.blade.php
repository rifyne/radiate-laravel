@extends('layouts.default')

{{-- Page title --}}
@section('title', 'Sign up')

{{-- Page styles --}}
@section('styles')
@stop

{{-- Page content --}}
@section('content')
<div class="container">
    <div class="page-header">
        <h1>Sign up</h1>
    </div>

    {{ Form::open(['route' => 'account.store']) }}

        <!-- name -->
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) }}
            {{ $errors->first('name', '<span class="help-block error">:message</span>') }}
        </div>

        <!-- email -->
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
            {{ $errors->first('email', '<span class="help-block error">:message</span>') }}
        </div>

        <!-- password -->
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
            {{ $errors->first('password', '<span class="help-block error">:message</span>') }}
        </div>

        <!-- password confirm-->
        <div class="form-group">
            {{ Form::label('password_confirmation', 'Password:') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
        </div>
        
        <div class="form-group">
            {{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}
        </div>

    {{ Form::close() }}
</div>


@stop
