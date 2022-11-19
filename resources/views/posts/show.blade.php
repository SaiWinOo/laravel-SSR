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
                        <div class="">
                            <!--          profileInfo-->
                            <div class="flex text-white justify-between items-center">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-10 h-10 rounded-full" src="{{ asset('storage/'
                                    .$post->user->profile_image)
                                     }}"
                                             alt="">
                                    </div>
                                    <div>
                                        <p  class="mb-0  ">{{ $post->user->name }}</p>
                                        <small class="mb-0  text-gray-300">{{ $post->created_at->format('h:i') }}  <i
                                                class="bi
                                    bi-globe-americas
                                    ms-1"></i></small>
                                    </div>
                                </div>
                            </div>
                            <!--          profileInfo-->
                            <hr>
                            <div>
                                <a href="{{ route('posts.show',$post->id) }}"><h5  class="font-bold text-lg">{{
                            $post->title
                            }}</h5></a>
                                <p class="text-sm py-3">{{ $post->description }}</p>
                            </div>
                            <hr>
                        </div>
                </div>
                <!--      middle section-->
            </div>
            {{--            Right Side Start--}}

            @include('rightside')
            {{--                Right Side End--}}
        </div>
    </div>


@endsection()
