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
