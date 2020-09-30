<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1 class="header">
            header login
        </h1>
    </header>
        
    <form action="{{route('post-login')}}" method="POST">
        @csrf
        <input type="text" name="username" placeholder=username><br>
        <input type="password" name="password" placeholder="password"><br>
        <button type="submit">login</button>
    </form>

    <footer>footer login</footer>
</body>

</html>