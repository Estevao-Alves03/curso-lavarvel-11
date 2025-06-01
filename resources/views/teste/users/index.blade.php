<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Usuarios:</h1>
    <table>
        <thead>
            <tr>
                <th>nome: </th>
                <th>email: </th>
                <th>acoes: </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{$user-> name}}</td>
                    <td>{{$user-> email}}</td>
                    <td> - </td>
                </tr>
                @empty
                <tr>
                    <td colspan="100">nenhum usuario no banco</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{$users -> links()}}
</body>
</html>