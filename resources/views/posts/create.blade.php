@extends('master')
@section('content')
    {{--    Create Tag Start--}}
    @if(route('category.create') === request()->url())
        @include('category.create')
    @endif
    {{--    Create Tag End--}}

    <div class="container ">
        <div class="max-w-4xl mt-3  mx-auto grid lg:grid-cols-4 gap-3 sm:grid-cols-1 ">

            @include('leftside')
            <div class="col-span-2 text-gray-500 ">
                <!--      middle section-->
                <form action="{{ route('posts.store') }}" method="post" >
                    @csrf
                    <div class="mb-3">
                        <input value="{{  old('title') }}" name="title" placeholder="Title" type="text" class="w-full
                        py-2 px-3
                        h-10
                        rounded ">
                        @error('title')
                        <small class="text-gray-50 font-bold">{{ $message }}</small>
                        @enderror
                    </div>
                    <select name="category_id" class="w-full mb-3 py-2 px-3 h-10 rounded bg-white" id="">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option
                            {{ $category->id == old('category_id') ? 'selected':'' }}
                        value="{{ $category->id
                        }}">{{
                        $category->title
                        }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <small class="text-gray-50 font-bold">{{ $message }}</small>
                    @enderror
                    <div class="mb-3">
                        <textarea  placeholder="Type what you want to say..." name="description" id=""
                                   class="w-full
                         p-2
                        rounded"
                                  rows="13">{{ old('description') }}</textarea>
                        @error('description')
                        <small class="text-gray-50 font-bold">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="bg-white py-1 px-3 rounded">Create Post</button>
                    </div>
                </form>
                <!--      middle section-->
            </div>
            {{--            Right Side Start--}}

            @include('rightside')
            {{--                Right Side End--}}
        </div>
    </div>


@endsection()
