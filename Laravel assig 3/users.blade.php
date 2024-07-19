<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border = 1>
        <tr>
        <td>ID</td>
        <td>Name</td>
        <td>email</td>
        <td>password</td>

        </tr>
        @foreach ($users as $user)
        <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->password }}</td>
        </tr>
        @endforeach
        </table>
</body>
</html>