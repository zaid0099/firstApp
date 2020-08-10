<div class="">
    <h1 class="font-bold text-xl mb-4">Following</h1>

    <ul>
        @forelse (current_user()->follows as $user)
        <li class="{{ $loop->last ? '' : 'mb-4' }}">
            <div>
                <a href="{{ route('profile.show', $user) }}" class="flex items-center text-sm">
                    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2" width="40" height="40">
                    {{ $user->name }}
                </a>
            </div>
        </li>
        @empty
        <li>No follower yet!</li>
        @endforelse
    </ul>
</div>
