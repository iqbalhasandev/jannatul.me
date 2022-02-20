<x-app-layout>
    <!-- single portfolio -->
    <section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0">
        <h2 class="archive-header">{{ $post->title }}</h2>
        <!-- portfolio info -->
        <ul class="list-inline portfolio-info mb-0 mt-4">
            <li class="list-inline-item"><i class="icon-user"></i>
                {{$post->author->name??'' }}
            </li>
            <li class="list-inline-item"><i class="icon-calendar"></i>
                {{
                Carbon::create($post->created_at)->format('Y-m-d')}}
            </li>
            <li class="list-inline-item"><i class="icon-link"></i>
                {{
                $post->category->name??'' }}
            </li>
        </ul>
        <div class="spacer" data-height="40"></div>

        <!-- portfolio image -->
        <img src="{{ Voyager::image($post->image) }}">

        <!-- portfolio content -->
        <div class="portfolio-content mt-5">
            <h3>Overview</h3>
            <p>{!! $post->body !!}</p>
        </div>
    </section>

</x-app-layout>
