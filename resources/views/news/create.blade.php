
<h2>Thêm mới Tin Tức</h2>

{!! Form::open(['method' => 'POST', 'url' => 'news']) !!}
    <label for="title">Title: </label>
    {!! Form::text('title', null, [ 'id' => 'title' ]) !!}
    {!! $errors->first('title', '<p>:message</p>') !!}
    {!! Form::submit('Save') !!}
{!! Form::close() !!}
