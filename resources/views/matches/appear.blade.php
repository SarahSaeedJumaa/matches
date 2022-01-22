@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!DOCTYPE html>
    <html>
    <head>
    <style>
    #matchesInf {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #matchesInf td, #matchesInf th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #matchesInf tr:nth-child(even){background-color: #f2f2f2;}

    #matchesInf tr:hover {background-color: #ddd;}

    #matchesInf th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    </style>
    </head>
    <body>

    <h1> Appear Informations</h1>

    <table id="matchesInf">
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <th>Match Name</th>
        <th>First Team</th>
        <th>Second Team</th>
        <th>Date </th>
      </tr>
         @if(isset($plyinfo) & $plyinfo->count( ) >0 )

            @foreach($plyinfo as $ply)
            <tr>
                  <td>{{ $ply->name }}</td>
                  <td>{{ $ply->user_name }}</td>
                  <td>{{ $ply->def_pos }}</td>
                  @foreach ($ply->matches as $pl )

                  <td>{{ $pl->match_name}}</td>
                  <td>{{ $pl->host_name }}</td>
                  <td>{{ $pl->guest_name }}</td>
                  <td>{{ $pl->date }}</td>
                  @endforeach

            </tr>
            @endforeach

              @endif



    </table>

    </body>
    </html>




</body>
</html>
@endsection
