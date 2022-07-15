<a href="/" class="block text-left px-3 text-sm leading-6 hover:bg-gray-300 focus:bg-gray-300">
    All
</a>
@foreach ($categories as $category )
<a href="/?category={{ $category->slug}} " class="block text-left px-3 text-sm leading-6 hover:bg-gray-300 focus:bg-gray-300">
    {{ ucwords($category->name)}}
</a>
@endforeach

<!-- &{{http_build_query(request()->except('category'))}} :active = 'request()->is("categories/{$category->slug}")'-->