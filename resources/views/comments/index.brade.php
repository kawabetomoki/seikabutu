<x-app-layout>
    <x-slot name="header">
        Blog
     </x-slot>
        <h1>Blog Comment</h1>
        <form action="/comments" method="COMMENT">
            @csrf
           <div class="title">
               <h2>Title</h2>
               <input type="text" name=comment[title] placeholder="コメントタイトル" value="{{ old('post.title') }}"/>
               <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="comment[body]" placeholder="コメント本文">{{ old('post.body') }}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
           </div>
           <input type="submit" value="入力"/>
       </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <div class='comments'>
            @foreach ($comment as $comment)
                <div class='comment'>
                    <h2 class='title'>{{ $comment->title }}</h2>
                    <p class='body'>{{ $comment->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $comment->links() }}
        </div>
</x-app-layout>