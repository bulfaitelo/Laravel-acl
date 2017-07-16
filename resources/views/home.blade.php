@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->descripition }}</p>
    @empty
        <p>Não tem nada!</p>
    @endforelse
</div>
@endsection
