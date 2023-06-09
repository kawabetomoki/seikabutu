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
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
               </div>
            @endforeach
       </div>
        {{ Auth::user()->name }}
       <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
</x-app-layout>
