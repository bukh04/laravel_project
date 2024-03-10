@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post" class="max-w-sm mx-auto">
            @csrf
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Title</label>
                <input
                    value="{{ old('title') }}"
                    type="text" name="title" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500"
                    placeholder="Title"/>
                @error('title')
                <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="content"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Content</label>
                <textarea name="content" id="content"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500"
                          placeholder="Content">{{ old('content') }}</textarea>
                @error('content')
                <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Image</label>
                <input {{ old('image') }} name="image" type="text" id="title"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500"
                       placeholder="Image"/>
                @error('image')
                <p class="text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div class="inline-block relative w-64">
                <label for="category">Category</label>
                <select
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    id="category" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{  old('category_id') == $category->id ? 'selected' : '' }}
                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
            <div>
                <label for="tags" class="block text-sm font-medium text-gray-900"> Tags </label>
                <select name="tags[]" id="tags" multiple
                        class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg mt-4 ">Create</button>
        </form>
    </div>
@endsection
