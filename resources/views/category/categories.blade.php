@extends('master')
@section('content')
    {{--    Create Tag Start--}}
    @if(route('category.create') === request()->url())
        <div class="fixed text-black bg-transparent w-full flex justify-center items-center h-screen">
            <div class="max-w-lg w-max">
                <div class="border  p-3 rounded animate__animated animate__zoomIn" >
                    <a href="{{ route('home') }}" class="block  text-end">
                        <i class="bi bi-x fa-2x text-white"></i>
                    </a>
                    <form class="" method="post" action="{{ route('category.store') }}">
                        @csrf
                        <div class="mt-3">
                            <input type="text" name="title" class="py-2  rounded px-2" placeholder="Category Title">
                            @error('title')
                            <p class="text-lime-50">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="w-full bg-gray-100 mt-3 rounded py-1">Create Tag</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
    {{--    Create Tag End--}}

    <div class="container ">
        <div class="max-w-4xl mt-3  mx-auto grid lg:grid-cols-4 gap-3 sm:grid-cols-1 ">

            @include('leftside')
            <div class="col-span-2 ">
                <!--      middle section-->
                <div class="">
                    <div class="text-center mb-3">
                        <div class="bg-white rounded-full flex text-gray-500 px-4 py-2">
                            <i class="bi bi-search mr-4 "></i>
                            <input type="text" class="w-full" placeholder="Search Twit">
                        </div>
                    </div>
                    <hr>
                    @foreach(\Illuminate\Support\Facades\Auth::user()->mycategories as $category)
                        <div class="grid grid-cols-2">
                            <a href="{{ route('posts.index') }}" class="px-3   rounded-lg py-3 hover:bg-gray-500">
                                <i class="bi bi-hash mr-2"></i> {{ $category->title }}
                            </a>
                            <form action="{{ route('category.destroy',$category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="px-3  rounded-lg py-3 hover:bg-gray-500">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
                <!--      middle section-->
            </div>
            {{--            Right Side Start--}}

            @include('rightside')
            {{--                Right Side End--}}
        </div>
    </div>


@endsection()
