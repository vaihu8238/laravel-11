<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Musicana</title>
    </head>
    <body>
    <h1>Add music here</h1>
<hr>
    <ul type="square">
        <li><a href="home">user homepage</a></li>
        <li><a href="adminhome">admin homepage</a></li>
    </ul>
<hr>

<fieldset>
    <legend>music section</legend>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Music name : </label><input type="text" name="name" id="name" value="name"> <hr>
        <label for="name">add file here : </label><input type="file" name="music" id="music" value="music"> <br><br>
        <button type="submit" name="submit">add music</button>
    </form>
</fieldset>


</body>
</html>
