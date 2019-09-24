@extends('master')
@section('content')

<table class="table">
    <head>
        <tr>
            <th>Contact</th>
        </tr>
    </head>
    <body>
        @forelse($contact as $cp)
        
        <tr>
            <td>{{ $cp }}</td>
        </tr>

        @empty

        <tr>
            <td>Tidak Ada Data</td>
        </tr>
        
        @endforelse
    </body>
</table>

@endsection