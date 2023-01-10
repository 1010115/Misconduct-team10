<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="/homePage.css">
</head>
<body>

<div class="body">
    @foreach($users as $user)
        <h2>Hoi {{$user->name}} </h2>
    @endforeach
    <div class="link-buttons">
        <a href="{{ route('journal') }}">
            <button type="button"> JOURNAL</button>
        </a>
        <a href="/inbox.php">
            <button type="button"> INBOX</button>
        </a>
    </div>

    <h2> Hoe gaat het vandaag?</h2>
    <div class="response-buttons">
        <button type="button"> Goed!</button>
        <button type="button"> Niet zo</button>
        <button type="button"> Weet ik niet</button>
    </div>

    <div class="articles">
        <article>
            <img src="" alt="image">
            <h1>Lorem ipsum</h1>
        </article>

        <article>
            <img src="" alt="image">
            <h1>Lorem ipsum</h1>
        </article>

    </div>

</div>

</body>
</html>

