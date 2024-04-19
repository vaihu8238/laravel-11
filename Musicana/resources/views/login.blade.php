<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
<body>
    <h1>login page</h1>

<a href="home">back to home</a>
    <fieldset>
        <legend>login part</legend>
        <form action="" method="POST">
           @csrf
            <label for="email">Email  : </label><input type="email" name="email" id="email"> <br>
            <label for="password">Password  : </label><input type="password" name="password" id="password"> <br>
            <label for="fpass">Forgot your password ? </label><a href="forgotpassword">CLICK HERE </a> <br>

            <button type="submit" name="log">login here</button>

        </form>
    </fieldset>
</body>
</html>
