<section class="popular-videos-section" aria-label="Popular Videos">
    <div class="container">
        <h2>@lang('Popular Videos')</h2>
        <div @class(['popular-videos', 'is-empty'=> $videos->isEmpty()])>
            @forelse($videos as $video)
                <div x-data class="popular-video" dir="ltr" style="--bg-image: url({{$video->getCoverUrl()}})">
                    <div class="popular-video-action">
                        <button class="icon-button" @click="$dispatch('search-video', '{{$video->url}}')">
                            <x-theme::icon.mini.download class="icon"/>
                        </button>
                    </div>
                    <div class="popular-video-content">
                        <span>{{ '@' . $video->username }}</span>
                    </div>
                </div>
            @empty
                <div class="popular-video-empty">
                    <img src="{{$theme->asset('images/video-player.webp')}}" alt="a 3D video player art">
                    <h3>@lang("No popular videos this month so far.")</h3>
                </div>
            @endforelse
        </div>
    </div>
</section>
