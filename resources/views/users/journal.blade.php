@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <h1>Journal</h1>
                    <form>
                        <div class="card">
                            <div class="card-header">{{ __('How do you feel today?') }}</div>
                            <div class="card-body">{{$mytime->format('Y-m-d')}}</div>
                            <textarea id="w3review" name="w3review" rows="4" cols="50" class="form-control">What happened today?</textarea>
                            <label for="emotions" class="card-body">How did you feel when you experienced that?</label>
                            <select id="emotions" class="form-control">
                                <option value="Happy">Happy</option>
                                <option value="Anxious">Anxious</option>
                                <option value="Violated">Violated</option>
                                <option value="Disgusted">Disgusted</option>
                                <option value="Sad">Sad</option>
                                <option value="Angry">Angry</option>
                                <option value="Afraid">Afraid</option>
                            </select>
                            <br>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
@endsection
