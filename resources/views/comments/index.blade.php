<x-app-layout>
    <x-slot name="header">
        Blog
     </x-slot>
        <h1>Blog Comment</h1>
        <form action="/comments/{{ $post->id }}/store" method="POST">
            @csrf
           <div class="title">
               <h2>Title</h2>
               <input type="text" name=comment[title] placeholder="コメントタイトル" value="{{ old('comment.title') }}"/>
               <p class="title__error" style="color:red">{{ $errors->first('comment.title') }}</p>
           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="comment[body]" placeholder="コメント本文">{{ old('comment.body') }}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('comment.body') }}</p>
           </div>
           <input type="submit" value="入力"/>
       </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <div class='comments'>
            @foreach ($comments as $comment)
                <div class='comment'>
                    {{ Auth::user()->name }}
                    <h2 class='title'>{{ $comment->title }}</h2>
                    <p class='body'>{{ $comment->body }}</p>
                </div>
            @endforeach
        </div>
        <!--<div class='paginate'>-->
        <!--    -->
        <!--</div>-->
</x-app-layout>