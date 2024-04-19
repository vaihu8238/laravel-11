<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration page</title>
    </head>
<body>
    <h1>registration page</h1>
    <a href="home">back to home</a>

    <fieldset>
        <legend>registration form</legend>
        <form action="" method="POST">
           @csrf
            <label for="name">Name  : </label><input type="text" name="name" id="name" value="name"> <br>
            <label for="email">Email  : </label><input type="email" name="email" id="email" value="email"> <br>
            <label for="password">Password  : </label><input type="password" name="password" id="password" value="password"> <br>

            <button type="submit" name="reg">Register here</button>

        </form>
    </fieldset>
</body>
</html>
