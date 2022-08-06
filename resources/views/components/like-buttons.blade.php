<div class="flex">
    <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        <div class="flex items-center mr-4 {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
            </svg>
            <button type="submit" class="text-xs">
                {{ $tweet->likes ?: 0 }}
            </button>
        </div>
    </form>
    <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        @method('DELETE')
        <div class="flex items-center {{ $tweet->isDislikedBy(current_user()) ? 'text-red-500' : 'text-gray-500' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M18 9.5a1.5 1.5 0 11-3 0v-6a1.5 1.5 0 013 0v6zM14 9.667v-5.43a2 2 0 00-1.105-1.79l-.05-.025A4 4 0 0011.055 2H5.64a2 2 0 00-1.962 1.608l-1.2 6A2 2 0 004.44 12H8v4a2 2 0 002 2 1 1 0 001-1v-.667a4 4 0 01.8-2.4l1.4-1.866a4 4 0 00.8-2.4z" />
            </svg>
            <button type="submit" class="text-xs">
                {{ $tweet->dislikes ?: 0 }}
            </button>
        </div>
    </form>
</div>
