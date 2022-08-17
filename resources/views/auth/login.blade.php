@extends('layouts.app')

@section('content')
    <div class="login-form">
        <form action="{{ route("login/$url") }}" method="post">
            @csrf
            <h2 class="text-center">Log in</h2>
            @if (\Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ \Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            {{ \Session::forget('success') }}
            @if (\Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ \Session::get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                @if ($errors->has('email'))
                    <span class="help-block font-red-mint">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                @if ($errors->has('password'))
                    <span class="help-block font-red-mint">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>

            @error('approve')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>
    </div>
@endsection
