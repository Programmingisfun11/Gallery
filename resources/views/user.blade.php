@extends('layouts.app')
@section('content')
    <div>

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('favImages') }}">Favorite Images</a>
                <form method="POST" action="{{ route('logout') }}" class="d-flex">
                    @csrf
                    <button class="btn btn-outline-secondary" type="submit">Logout</button>
                </form>
            </div>
        </nav>

        <h1>Welcome {{ Auth::guard('user')->user()->name }} </h1>
        <div class="btnGallery">
            <button class="btn btn-outline-primary" onclick="location.href='{{ route('gallery') }}'" type="submit">View
                Gallery</button>
        </div>

    </div>
@endsection
