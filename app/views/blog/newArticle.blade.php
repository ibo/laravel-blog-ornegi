@extends('template.default')

@section ('content')

@if ($errors->count() > 0)

    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $msg)
        <li>{{ $msg }}</li>
        @endforeach
        </ul>
    </div>
    
@endif

{{ Form::open(array('route' => 'insertArticle', 'method' => 'POST')) }}
<div class="form-group">
  {{ Form::label('','Makale Adı') }}
  {{ Form::text('title', Input::old('title'), array('placeholder' => 'Makale Başlığını Yazın', 'class' => 'form-control')) }}
</div>
<div class="form-group">
  {{ Form::label('','Makale Detayı') }}
  {{ Form::textarea('content', Input::old('content'), array('placeholder' => 'Makale Detayını Yazın', 'class' => 'form-control')) }}
</div>
<button type="submit" class="btn btn-default">GÖNDER</button>
{{ Form::close() }}

@stop