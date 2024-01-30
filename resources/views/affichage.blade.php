<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>prenom</th>
                <th>poste</th>
                <th>module</th>
    
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $cl)
            <tr>
            @foreach ($cl as $cle)
                    <td>
                        @if (is_array($cle))
                        <ul>

                        
                            @foreach ($cle as $item)
                            <li>

                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                        @else
                            {{ $cle }}
                        @endif
                    </td>
                    @endforeach
                </tr>
                    @endforeach
        </tbody>
        

    </table>


</body>

</html>
