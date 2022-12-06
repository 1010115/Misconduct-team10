@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}

{{--                            @if (Auth::user() && Auth::user()->role == 'admin')--}}
                            <div>
                        <a href="{{ route('users') }}">Go to user list</a>
                            </div>
{{--                            @endif--}}

{{--                            <div>--}}
{{--                            <a href="{{ route('create') }}">Make request</a>--}}
{{--                            </div>--}}

{{--                            @if (Auth::user() && Auth::user()->role == 'admin')--}}

                            <div>
                                <a href="{{ route('message') }}">Messages</a>
                            </div>
{{--                            @endif--}}

                            <div>
                                <a href="{{ route('inbox') }}">Inbox</a><br>
                                <a href="{{ route('journal') }}">Go to journal list</a>
                            </div>


                    </div>
                </div>
            </div>
        </div>
@endsection
