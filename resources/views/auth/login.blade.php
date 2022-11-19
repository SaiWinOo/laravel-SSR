@extends('auth.authMaster')
@section('content')

    <div class="container bg-blue h-screen mx-auto">
        <div class="flex h-screen justify-center items-center">
            <div class="max-w-xs">
                <form class="border text-gray-500 bg-gray-100  p-3 rounded" action="{{ route('auth.postLogin') }}"
                      method="post" >
                    @csrf
                    <h2 class="text-center text-2xl mb-2 text-black">Login  Form</h2>
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
                    @if(session('status'))
                        <small class="text-red-700">
                            {{ session('status') }}
                        </small>
                    @endif
                    <div class="mt-3">
                        <button class="px-3 bg-yellow-400 text-black border rounded text-lg
                        border-gray-400">Login</button>
                    </div>
                    <hr class="border-gray-400 my-2">
                    <div class="text-center">
                        <p>Register if you are new!</p>
                        <a href="{{ route('auth.register') }}" class="px-3 py-1 my-1 bg-yellow-400 text-black border
                        rounded
                        text-lg
                        border-gray-400">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
