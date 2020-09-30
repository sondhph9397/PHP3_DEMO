<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Demo student list</title>
</head>

<body>
    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>phone</th>
            <th>age</th>
            <th>gender</th>
            <th>address</th>
            <th>active</th>
        </thead>
        <tbody>
            @foreach($list as $li)
            <tr>
                <td>{{$li->id}}</td>
                <td>{{$li->name}}</td>
                <td>{{$li->phone}}</td>
                <td>{{$li->age}}</td>
                <td>
                    @if ($li->gender == 0)
                        Nu
                    @elseif ($li->gender == 1)
                        Nam
                    @else
                        NOTHING
                    @endif
                </td>
                <td>{{$li->address}}</td>
                <td>{{$li->is_active == 1 ? 'YES' : 'NO'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>