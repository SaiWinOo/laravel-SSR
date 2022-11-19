<div class="border-r ">
    <div class="fixed">
        <a href="{{ route('home') }}" class="px-3 block  rounded-lg py-3 hover:bg-gray-500">
            <i class="bi bi-house mr-2"></i> Home
        </a>
        <a href="{{ route('posts.create') }}" class="px-3 block  rounded-lg py-3 hover:bg-gray-500">
            <i class="bi bi-pencil mr-2"></i> Create Post
        </a>
        <a href="{{ route('posts.index') }}" class="px-3 block  rounded-lg py-3 hover:bg-gray-500">
            <i class="bi bi-database mr-2"></i> My Posts
        </a>
        <a href="{{ route('category.create') }}" class="px-3 block  rounded-lg py-3 hover:bg-gray-500">
            <i class="bi bi-layers mr-2"></i> Create Tag
        </a>
        <a href="{{ route('category.index') }}" class="px-3 block  rounded-lg py-3 hover:bg-gray-500">
            <i class="bi bi-layers mr-2"></i> My Tags
        </a>
        <a href="#" class="px-3 block  rounded-lg py-3 hover:bg-gray-500">
            <i class="bi bi-bookmark mr-2"></i> Saved Posts
        </a>
        <a href="#" class="px-3 block rounded-lg py-3 hover:bg-gray-500">
            <i class="bi bi-gear mr-2"></i>Profile Settings
        </a>
        <a href="" class="px-3 block rounded-lg py-3 hover:bg-gray-500">
            <i class="bi bi-gear mr-2"></i> Settings
        </a>
        <form method="post" class=" w-full" action="{{ route('auth.logout') }}">
            @csrf
            <button class="px-3 text-start w-full rounded-lg py-3 hover:bg-gray-500">
                <i class="bi bi-box-arrow-right mr-2"></i> Logout
            </button>
        </form>
    </div>
</div>
