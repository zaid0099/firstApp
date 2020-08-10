<div class="px-8 py-4 border-b border-b-gray-400">
    <div class="mr-2 flex items-center">
        <a href="{{ route('profile.show', $tweet->user->userName) }}">
            <img src=" {{ $tweet->user->avatar }}" alt="" class="rounded-full mr-2 w-h-50">
        </a>
        <a href="{{ route('profile.show', $tweet->user->userName) }}">
            <h5 class=" font-bold">{{ $tweet->user->name }}</h5>
        </a>
    </div>

    <div>
        <p class="text-sm mb-3 ml-10 px-2 pt-2"> {{ $tweet->body }} </p>
        <div class="flex justify-between">
            <div>
                <x-like-buttons :tweet="$tweet" />
            </div>
            @can ('update', $tweet)
            <div class="">
                <a href="#"><i class="fa fa-trash hover:text-blue-600" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pencil hover:text-blue-600" aria-hidden="true"></i></a>
            </div>
            @endcan
        </div>
    </div>
</div>
