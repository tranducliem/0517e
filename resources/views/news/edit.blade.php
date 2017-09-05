
<h2>Chỉnh sửa tin tức "{{ $news->title }}"</h2>

{!! Form::model($news, ['method' => 'PATCH', 'url' => ['news', $news->id]]) !!}
    <label for="title">Title: </label>
    {!! Form::text('title', null, [ 'id' => 'title' ]) !!}
    {!! $errors->first('title', '<p>:message</p>') !!}
    {!! Form::submit('Save') !!}
{!! Form::close() !!}

<a href="{{ url('news') }}">< Back</a>
