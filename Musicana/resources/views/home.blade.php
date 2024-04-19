<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Musicana</title>
    </head>
    <body>
        <h1>Musicana</h1>
        <hr>
        <ul type="square">

        <li><a href="home">homepage</a></li>
        @guest
        <li><a href="register">register</a></li>
        <li><a href="login">login</a></li>
        @else
        <li><a href="logout">logout</a></li>
        {{-- <li><a href="user_profile/{{ $user->email }}">USER PROFILE</a></li> --}}

        @endguest
    </ul>
    <hr>

<fieldset>music section</fieldset>
<br><br><hr>

<table border="" cellspacing="0" cellpadding="0" width="70%">
    <tr height="50px">
        <th>S.no</th>
        <th>Music Name</th>
        <th>File</th>
        <th>Action</th>
        <th>Review section</th>
    </tr>
    <?php
    foreach ($music as $value)
    { ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <tr height="70px">
            <th width="5%">{{ $value->id }}</th>
            <th width="20%">{{ $value->name }}</th>
            <th><audio controls><source src='uploads/{{ $value->music }}' type='audio/mpeg'></audio></th>
            <th width="15%"><button type="submit" value="{{ $value->id }}" name="submit">add review</button></th>
            <th width="30%"></th>
        </tr>
    </form>
<?php } ?>
</table>

</body>
</html>
