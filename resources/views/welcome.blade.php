@extends('layouts.app')
@section('content')
    <main>

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Welcome!</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>

                <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='login/user'">Login</button>
                <button type="button" class="btn btn-secondary btn-sm"
                    onclick="location.href='register/user'">Register</button>
            </div>
        </div>
    </main>
@endsection
