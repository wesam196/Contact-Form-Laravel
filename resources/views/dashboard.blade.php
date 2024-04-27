<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/stylesheet.css" rel="stylesheet">

    <style>
         .table-container {
     
     overflow-x: auto;
     }
    </style>
  </head>
<body>
@include('layouts.header')




<br><br><br><br><br>
<h1 class="text-center"> Welcome to Dashboard</h1>

<table class='table table-container' >
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Message Type</th>
    <th>Status</th>
    <th>Change Status</th>
    <th>Open</th>
  </tr>

  @foreach($data as $item)
  <tr>
    <th>{{$item->id}}</th>
    <th>{{$item->name}}</th>

    @if($item->type == 0)
    <th>Questions</th>
    
    @elseif($item->type==1)
        <th>Suggestion</th>
    
    @endif


    @if($item->read==0)
    <th>Unread</th>
    @else
    <th>Already read</th>
    @endif
    <th >
    <a href="changeStatus/{{$item->id}}" class='btn btn-primary'>Change Status </a>
    </th>

    <th>

    <a href="message/{{$item->id}}" class='btn btn-primary'>Open</a>
    </th>
  </tr>
@endforeach


</table>
</body>
</html>
