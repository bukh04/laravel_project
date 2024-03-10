@extends('layouts.main')
@section('content')
    <div>
            <div>{{ $post->id }}. {{ $post->title }}</div>
            <div>{{ $post->content }}</div>
            <div>{{ $post->image }}</div>
    </div>
    <div>
        <a href="{{ route('post.edit', $post->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('post.destroy', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg mt-4 ">
        </form>
    </div>
    <div>
        <a href="{{ route('post.index') }}">Back</a>
    </div
@endsection
