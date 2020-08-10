<x-app>
    <div>
        @foreach ($users as $user)
        <a href="{{ route('profile.show', $user->userName) }}" class="flex items-center mb-5">
            <img src=" {{ $user->avatar }} " alt="" class="mr-4 rounded-full w-h-50">
            <h4>
                <h4 class="font-bold ">{{ '@' . $user->name }}</h4>
            </h4>
        </a>
        @endforeach

    </div>
</x-app>
