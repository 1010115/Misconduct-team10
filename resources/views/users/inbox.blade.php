@extends('layouts.app')

@section('content')

{{--    <body>--}}
{{--    <div class="container">--}}

{{--        <div class="panel panel-primary">--}}

{{--            <div class="panel-heading">--}}
{{--                <h2>Inbox</h2>--}}
{{--            </div>--}}

{{--            <div class="panel-body">--}}

{{--                <body>--}}
{{--                <!-- if validation in the controller fails, show the errors -->--}}
{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <div>--}}

{{--                    <div class="pull-right">--}}
{{--                        <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>--}}
{{--                    </div>--}}

{{--                    <form action="{{ route('message.store') }}" method="post" enctype="multipart/form-data">--}}
{{--                        <!-- Add CSRF Token -->--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Name</label>--}}
{{--                            <input type="text" class="form-control" name="name" required>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Message</label>--}}
{{--                            <input type="text" class="form-control" name="text" required>--}}
{{--                        </div>--}}
{{--                        <button class="btn btn-primary" type="submit">Submit</button>--}}
{{--                    </form>--}}


{{--                </div>--}}
{{--                </body>--}}




                <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('My Inbox') }}</div>
                    <div class="card-body">
                        <table class="table">

                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
                            </div>

                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Message</th>
                            <tr>
                            </thead>
                            <tbody>
                            @foreach( $inbox as $inbo)

{{--                                    <div class="row row-cols-1 row-cols-md-3 g-3">--}}
{{--                                        <div class="row row-cols-1 row-cols-md-3 g-3">--}}
{{--                                            <div class="card">--}}
{{--                                                <img src="storage/app/public/artwork" alt="{{$post->file_path}}">--}}
{{--                                                <tr>--}}
                                                    <td>{{$inbo->name}}</td>
                                                    <td>{{$inbo->text}}</td>

{{--                                                    @if (Auth::user() && Auth::user()->role == 'admin')--}}
                                                    <td>
                                                        <a class="btn btn-primary" href="{{ route('inbox.edit', [$inbo->id]) }}">  Edit</a>

                                                        <a class="btn btn-primary" href="{{ route('inbox.delete', [$inbo->id]) }}">Delete</a>
                                                    </td>
                                                </tr>
                                            <div>
{{--                                                     @endif--}}
                            @endforeach

                            </tbody>
                        </table>
                    </div>
@endsection
