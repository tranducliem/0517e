@extends('layouts.admin')

@section('title') News @endsection

@section('content')
    <h2>News List</h2>

    @if(Session::has('success'))
        <p style="color: green;">{{ Session::get('success') }}</p>
    @endif

    <a href="{{ url('news/create') }}">Create New</a>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td width="220">Action</td>
        </tr>
        @foreach($list as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'url' => ['news', $item->id]]) !!}
                        <a href="{{ url('news/'.$item->id.'/edit') }}">Edit</a>
                        |
                        <button type="submit"
                                onclick="return confirm('Are you sure?-');"
                                style="border: none; text-decoration: underline;
                                color: -webkit-link; cursor: auto; background-color: #ffffff;
                                "
                        >Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection