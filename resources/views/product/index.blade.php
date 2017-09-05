@extends('layouts.admin')

@section('title') Product @endsection

@section('content')
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @if(isset($products))
            @foreach($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection