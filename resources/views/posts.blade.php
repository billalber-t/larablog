<x-layout>
  @include('__posts-header')

  <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if($posts->count())
      <x-post-featured-card :post="$posts[0]" />

      @if ($posts->count()>1)
        <div class="lg:grid lg:grid-cols-3">
            @foreach ($posts->skip(1) as $post )

              <x-post-card :post="$post" />

            @endforeach

        </div>
      @endif

    @else
      <p>No post... Please try later</p>
    @endif
  </main>

</x-layout>