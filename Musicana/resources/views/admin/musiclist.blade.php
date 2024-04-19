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
            <li><a href="addmusic">Addmusic</a></li>
            <li><a href="musiclist">musiclist</a></li>
            <li><a href="userlist">Userlist</a></li>

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
    </tr>
    <?php
    foreach ($music as $value)
    { ?>

<form action="/musiclist/{{$value->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <tr height="70px">
        <td width="20%">{{ $value->id }}</td>
            <td width="45%">{{ $value->name }}</td>
            <td><audio controls><source src='uploads/{{ $value->music }}' type='audio/mpeg'></audio></td>
            <th width="35%"><button name="del" type="submit" value="{{ $value->id }}">Delete</button></th>
            </tr>
        </form>
        <?php } ?>
    </table>

</body>
</html>
