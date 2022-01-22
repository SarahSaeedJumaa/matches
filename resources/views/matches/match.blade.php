<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matches</title>
</head>
<body>
    <div>
        <table>
            <tr>
                  <th>Name </th>
                  <th>last Name</th>
                  <th>Position</th>
                  <th>Match Name</th>
            </tr>
              @foreach ($match->Match as $data)
             <tr>
                <td>  {{ $match['name']}} </td>
                <td>  {{ $match['user_name']}} </td>
                <td>  {{ $match['def_pos']}} </td>
                <td>  {{ $data['match_name']}} </td>
             </tr>
             @endforeach


            </tr>
          </table>
     </div>
</body>
</html>
