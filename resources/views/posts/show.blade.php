<x-app-layout>
    <x-slot name="header">
        Blog
    </x-slot>
       <h1 class='title'>
           {{ $post->title }}
       </h1>
       <div class='content'>
            <div class='content_post'>
               <h3>本文</h3>
               <p class='body'>{{ $post->body }}</p>
            </div>
       </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">編集</a>
       </div>
       <div class="comment">
            <a href="/comments/{{ $post->id }}/comment">コメント</a>
       </div>
       <div class="footer">
            <a href="/">戻る</a>
       </div>
</x-app-layout>
