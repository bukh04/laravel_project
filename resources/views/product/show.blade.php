@extends('layouts.main')
@section('content')
    <div>
            <div>Price: {{ $product->Price }}</div>
            <div>image: {{ $product->image }}</div>
            <div>title:  {{ $product->title }}</div>
            <div>description: {{ $product->description }}</div>
            <div>comments: {{ $product->comments }}</div>
            <div>amount_of_buys: {{ $product->amount_of_buys }}</div>
    </div>
    <div>
        <a href="{{ route('product.edit', $product->id) }}">Edit</a>
    </div>
    <div>
        <form action="#" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg mt-4 ">
        </form>

    </div>
    <div>
        <a href="{{ route('product.index') }}">Back</a>
    </div
@endsection
