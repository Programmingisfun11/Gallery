@extends('layouts.app')
@section('content')
    <div>
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
            <div class='title'>Gallery</div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="row">
                @foreach ($images as $image)
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        @if (Auth::guard('user')->check())
                            <a href="{{ route('addFavoriteImages', ['id' => $image->id]) }}">
                            @else
                                <a href="#">
                        @endif

                        <div class="image w-100 shadow-1-strong rounded mb-4"
                            style="
                        background-image: url({{ asset("images/{$image->image}") }});
                        height:410px;
                        display:flex;
                        justify-content: center;
                        align-items: center;
                       width: 100%;
                       background-repeat: no-repeat;
                       background-size: cover;">
                            <div class='hearthimage'>
                                <img class='hearth' style="visibility:hidden; width:100px"
                                    src="{{ asset('icons/heart.png') }}" alt='image' alt="Boat on Calm Water" />
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
