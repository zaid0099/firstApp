<div class="border border-blue-400 rounded-xl px-8 py-6">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" id="" class="w-full " placeholder="What's Up!" required autofocus></textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ current_user()->avatar }}" alt="" class="w-h-50 rounded-full mr-2">
                {{ current_user()->name }}
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-xl shadow py-2 px-2 text-white px-6 text-sm">Submit</button>
        </footer>
    </form>
</div>
