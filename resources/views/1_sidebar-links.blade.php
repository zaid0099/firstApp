<ul>
    <li class="mb-4">
        <a href="{{ route('home') }}" class="font-bold text-lg mb-5 black hover:text-blue-600">Home</a>
    </li>
    <li class="mb-4">
        <a href="{{ route('explore') }}" class="font-bold text-lg mb-5 black hover:text-blue-600">Explore</a>
    </li>
    <li class="mb-4">
        <a href="{{ route('profile.show', current_user()->userName) }}" class="font-bold text-lg mb-5 black hover:text-blue-600">Profile</a>
    </li>
    <li>
        <form method="POST" action="/logout">
            @csrf
            <button class="font-bold text-lg hover:text-blue-600">LogOut</button>
        </form>
    </li>
</ul>
