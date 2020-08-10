<div class="border border-gray-300 rounded-xl mt-8">
    @forelse($tweets as $tweet)
    @include('2_1_tweet')
    @empty
    <p>No Tweets Yet!</p>
    @endforelse
</div>
