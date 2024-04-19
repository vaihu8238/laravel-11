<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User profile page</title>
</head>
<body>

    <h1>User Profile</h1>
    <hr>
        <ul type="square">
            <li><a href="home">user homepage</a></li>
       </ul>
    <hr>
    <fieldset>Profile section</fieldset>
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
