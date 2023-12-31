@extends('layouts.dash')
@section('title', 'posts')
@section('content')
    <button style=" margin: 25px;" type="button" class="btn btn-success "><i class="fa fa-plus"></i>
        <a style="color: white; text-transform: capitalize; margin-left: 9px;" href="{{ route('posts.create') }}">{{ trans('post_trans.add_post') }}</a></button>
    <div class="card">
        @foreach ($posts as $post)
            <div class="card-header">
                <strong class="card-title">{{ $post->name }}</strong>
                <p>{{ $post->title }}</p>

                <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">{{ trans('post_trans.edit_post') }}</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="{{ trans('post_trans.delete_post') }}">
                </form>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->description }}</p>
            </div>
        @endforeach
    </div>

@endsection
