<x-app-layout>
    <x-slot name="header">
        Blog
     </x-slot>
        <h1>Blog</h1>
       <form action="/posts" method="POST">
           @csrf
           <div class="title">
               <h2>Title</h2>
               <input type="text" name=post[title] placeholder="タイトル" value="{{ old('post.title') }}"/>
               <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
           <div class="summary">
               <h2>summary</h2>
               <textarea name="post[summary]" placeholder="Blogの要約">{{ old('post.summary') }}</textarea>
               <p class="summary__error" style="color:red">{{ $errors->first('post.summary') }}</p>
           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
           </div>
           <input type="submit" value="store"/>
       </form>
       <div class="footer">
            <a href="/">戻る</a>
       </div>
</x-app-layout>