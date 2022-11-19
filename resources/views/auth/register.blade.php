@extends('auth.authMaster')
@section('content')

    <div class="container bg-blue h-screen mx-auto">
        <div class="flex h-screen justify-center items-center">
            <div class="max-w-xs">
                <form class="border text-gray-500 bg-gray-100  p-3 rounded" action="{{ route('auth.postRegister') }}"
                      method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <h2 class="text-center text-2xl mb-2 text-black">Register Form</h2>
                    <div class="mt-1">
                        <input value="{{ old('name') }}" placeholder="Your Name" class=" w-full border rounded  p-1  "
                               type="text"
                               name="name" />
                        @error('name')
                        <small class="text-red-900 font-bold text-xs">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <input value="{{ old('email') }}" placeholder="Email Address" class=" w-full border rounded
                        p-1 "
                               type="text"
                               name="email" />
                        @error('email')
                        <small class="text-red-700 font-bold text-xs">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <input placeholder="Password"  class=" w-full border rounded  p-1 " type="password"
                               name="password" />
                        @error('password')
                        <small class="text-red-700 font-bold text-xs">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <input placeholder="Confirm Password" class=" w-full border rounded  p-1 " type="password"
                               name="password_confirmation" >
                        @error('password_confirmation')
                        <small class="text-red-700 font-bold text-xs">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <input type="file" name="profile_image" class=" ">
                        @error('profile_image')
                        <p class="text-red-700 font-bold text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <button class="px-3 bg-yellow-400 text-black border rounded text-lg border-gray-400
">Register</button>
                    </div>

                    @error('email')
                    @if($message === 'The email has already been taken.')
                        <hr class="my-3 border">
                        <p class="text-center">Already have an account! Login </p>
                        <div class="text-center">
                            <a href="{{ route('auth.login') }}" class="px-3 py-1 bg-yellow-400 text-black border rounded
                            text-lg
                            border-gray-400
">Login</a>
                        </div>
                    @endif
                    @enderror
                </form>
            </div>
        </div>
    </div>


@endsection
