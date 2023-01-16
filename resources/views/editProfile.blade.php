<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Profile</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="/profile.css">
</head>
<body>

@foreach($users as $user)
        <h1>Welkom {{$user->name}} </h1>
        <p>{{$user->email}}</p>
@endforeach


<button type="submit">Submit</button>

</body>
