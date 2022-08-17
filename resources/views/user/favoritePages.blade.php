@extends('layouts.app')
@section('content')
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Favorite Images</h1>
                </div>
            </div>
        </section>
        <div class="album py-5 bg-light">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($data as $image)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ asset("images/{$image->image}") }}" width="100%" height="300px">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </main>
@endsection
