@extends('template.default')

@section('content')

<h3>{{ $article->title }}</h3>

<p>
    <small><b>{{ $article->user->fullname }}</b> tarafından {{ $article->created_at }} tarihinde yayınlanan yazıyı okumaktasınız.</small>
</p>

<p>{{ $article->content }}</p>

@stop