<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music list control</title>
</head>
<body>

    <h1>Music list page</h1>
    <hr>
        <ul type="square">
            <li><a href="home">user homepage</a></li>
            <li><a href="adminhome">admin homepage</a></li>
            <li><a href="addmusic">Add music</a></li>
            <li><a href="musiclist">musiclist</a></li>
            <li><a href="userlist">Userlist</a></li>
        </ul>
    <hr>
    <fieldset>Userlist</fieldset>
    <br><br><hr>

    <table border="" cellspacing="0" cellpadding="0" width="70%">
        <tr height="50px">
            <th>S.no</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php
    foreach ($user as $value)
    { ?>

<form action="" method="POST" enctype="multipart/form-data">
    <tr height="60px">
        <td width="10%">{{ $value->id }}</td>
            <td width="45%">{{ $value->name }}</td>
            <td width="45%">{{ $value->email }}</td>
            </tr>
        </form>
        <?php } ?>
    </table>

</body>
</html>
