<x-app-layout>
    <x-slot name="header">
        Blog
     </x-slot>
       <h1>Blog</h1>
       <a href='/posts/create'>create</a>
       <div class='posts'>
           @foreach ($posts as $post)
               <div class='post'>
                   <a href="posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                   <p class='summary'>{{ $post->summary }}</p>
               </div>
            @endforeach
       </div>
        {{ Auth::user()->name }}
       <div class='paginate'>
            {{ $posts->links() }}
        </div>
</x-app-layout>
