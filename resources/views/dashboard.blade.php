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

  </head>
<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">

        <div class="container">
            <a class="navbar-brand" href="#">Your Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Engish
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
  
                        </ul>
                    </li>

                    <li>
                    <x-app-layout>
                            </x-app-layout>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-icon">
    <ul class="icon-2 sticky-top">
      <li><a href="/register"><i class=" bi bi-stopwatch-fill "></i> register</a></li>
      <li><a href="#"><i class="fas fa-cogs"></i> Ihram</a></li>
      <li><a href="#"><i class=" fas fa-info-circle"></i> Ihram clothing &amp; Prohibitions</a></li>
      <li><a href="#"><i class="fas fa-cogs"></i> Determining your Miqats</a></li>
      <li><a href="#"><i class="fas fa-envelope"></i> Tawaf &amp;Saie</a></li>
    </ul>
</div>

<h1>this is dashboard</h1>

<table class='table' >
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
