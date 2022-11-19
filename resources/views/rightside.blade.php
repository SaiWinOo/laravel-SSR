<div class="border-l pl-3">
    <div class="flex items-center ">
        <div class="w-10 mr-3">
            <img class="h-10 w-10 rounded-full " src="{{ asset('storage/'
                        .\Illuminate\Support\Facades\Auth::user()
                        ->profile_image)
                         }}"
                 alt="">
        </div>
        {{ \Illuminate\Support\Facades\Auth::user()->name   }}
    </div>
    <hr class="border my-3 bg-white">
    <div>
        @foreach($categories as $category)
            <a href="{{ route('home') }}" class="px-3 block  rounded-lg py-3 hover:bg-gray-500">
                <i class="bi bi-hash mr-2"></i> {{ $category->title }}
            </a>
        @endforeach
    </div>
</div>
