@extends('template.default')

@section('content')

@foreach ($articles as $article)

<h3>{{ HTML::link(URL::route('detail', array('id' => $article->id)), $article->title) }}</h3>
<p>
    {{ Str::words($article->content, 30, '...') }}
</p>
<hr />

@endforeach

{{ $articles->links() }}

@stop