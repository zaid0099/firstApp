<x-master>
    <section class="px-6">
        <main class="py-4">
            <div class="md:flex md:justify-between">
                @if(auth()->check())
                <div class="md:w-1/12 p-2">@include('1_sidebar-links')</div>
                @endif

                <div class="md:flex-1 p-2 md:mx-4">{{ $slot }}</div>

                @if(auth()->check())
                <div class="md:w-1/6 bg-blue-100 border border-gray-300 rounded-xl py-4 px-6 ">@include('3_friends-list')</div>
                @endif
            </div>
        </main>
    </section>
</x-master>
