@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('product.store') }}" method="post" class="max-w-sm mx-auto">
            @csrf
            <div class="mb-5">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Price</label>
                <input
                    value="{{ old('price') }}"
                    type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500" placeholder="Price"  />
                @error('price')
                <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Image</label>
                <input
                    value="{{ old('image') }}"
                    name="image" type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500" placeholder="Image"  />
                @error('image')
                <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">title</label>
                <input
                    value="{{ old('title') }}"
                    name="title" type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500" placeholder="title"  />
                @error('title')
                <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Description</label>
                <input
                    value="{{ old('description') }}"
                    name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500" placeholder="description"  />
                @error('description')
                <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="comments" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Comments</label>
                <input
                    value="{{ old('comments') }}"
                    name="comments" type="text" id="comments" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500" placeholder="comments"  />
                @error('comments')
                <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="amount_of_buys" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Amount of buys</label>
                <input
                    value="{{ old('amount_of_buys') }}"
                    type="number" name="amount_of_buys" id="amount_of_buys" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500" placeholder="amount_of_buys"  />
                @error('amount_of_buys')
                <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="inline-block relative w-64">
                <label for="category">Category</label>
                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{  old('category_id') == $category->id ? 'selected' : '' }}
                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div>
                <label for="tags" class="block text-sm font-medium text-gray-900"> Tags </label>
                <select name="tags[]" id="tags" multiple class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                    @foreach($tags as $tag)
                        <option
                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg mt-4 ">Create</button>
        </form>
    </div>
@endsection
