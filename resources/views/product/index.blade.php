@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('product.create') }}">Add one</a>
        </div>
        @foreach($products as $product)
            <div><a href="{{ route('product.show', $product->id) }}">{{ $product->id }}. {{ $product->title }}</a></div>
        @endforeach
    </div>
@endsection
