@extends ('layouts.base')

@section('title')
    <title>Delivery Eficiente</title>
@endsection

<!-- No necesito esto si la Api es solo de login  

@section('styles')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
@endsection

@section('js')
    <script src="js/script.js"></script>
@endsection

-->

@section('body')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- No necesito esto si la Api es solo de Login

            <div class="content">
                <div class="title m-b-md">
                    Delivery Eficiente
                </div>
            </div>

            <div id="map"></div>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi5ea26UY8D19n3acHapLTihVwmouXYgI&callback=iniciarMap"></script>

            -->

        </div>

@endsection
