@extends('layouts.default')

{{-- Page title --}}
@section('title', 'Login')

{{-- Page styles --}}
@section('styles')
@stop

{{-- Page content --}}
@section('content')
<div class="container">
    <div class="page-header">
        <h1>Log in</h1>
    </div>
    
    {{ Form::open(['route' => 'session.store']) }}

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
        
        <div class="form-group">
            {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
        </div>

        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                {{ Session::get('error') }}
            </div>
        @endif

    {{ Form::close() }}
</div>

@stop
