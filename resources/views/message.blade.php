<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <table class='table'>

    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Text</th>
        <th>Date</th>

    </tr>
<tr>
    <th>{{$data->id}}</th>
    <th>{{$data->name}}</th>
    <th>{{$data->contactWay}}</th>
    <th>{{$data->message}}</th>
    <th>{{$data->created_at}}</th>
</tr>


    </table>
</body>
</html>