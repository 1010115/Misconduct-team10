@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">

                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('home') }}">Back</a>
                            </div>

                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Delete</th>
                            <tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('inbox.delete', [$user->id]) }}"
                                           style="background-color: red;">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('editProfile') }}">Profiel veranderen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
