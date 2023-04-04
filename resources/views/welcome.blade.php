<x-web.layout.main>

    <div class="d-flex flex-column gap-3">
        @foreach(\App\Models\Forum::all() as $forum)
            <div class="border border-top border-bottom d-flex flex-column gap-3">
                <div class="h3">{{ $forum->title }}</div>
                @foreach($forum->lastPosts(10) as $post)
                    <div class="d-flex flex-column">
                        <div class="h4">
                            {{ $post->title }}
                        </div>
                        <div class="border-bottom">
                            {{ $post->content }}
                        </div>
                        <div>
                            {{ $post->author->name }}
                        </div>
                    </div>
                @endforeach
            </div>

        @endforeach
    </div>



</x-web.layout.main>
