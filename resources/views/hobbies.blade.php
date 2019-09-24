@extends('master')
@section('content')

<table class="table">
    <head>
        <tr>
            <th>Hobby</th>
        </tr>
    </head>
    <body>
        @forelse($hobbies as $hobby)
        
        <tr>
            <td>{{ $hobby }}</td>
        </tr>

        @empty

        <tr>
            <td>Tidak Ada Data</td>
        </tr>
        
        @endforelse
    </body>
</table>

@endsection