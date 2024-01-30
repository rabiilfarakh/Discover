<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>blog</h1>
    <table border="1" width=50%>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>
        @foreach ($users as $t)
        <tr>
            <td>{{$t->UserId}}</td>
            <td>{{$t->UserName}}</td>
            <td>{{$t->email}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>