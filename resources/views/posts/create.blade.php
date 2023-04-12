<x-app-layout>
    <x-slot name="header">
        Blog
     </x-slot>
        <h1>Blog</h1>
       <form action="/posts" method="POST">
           @csrf
           <div class="title">
               <h2>Title</h2>
               <input type="text" name=post[title] placeholder="タイトル">
           </div>
           <div class="summary">
               <h2>summary</h2>
                <textarea name="post[summary]" placeholder="Blogの要約"></textarea>
           </div>
           <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="1日お疲れさまでした。"></textarea>
           </div>
           <input type="submit" value="store"/>
       </form>
       <div class="footer">
            <a href="/">戻る</a>
       </div>
</x-app-layout>