<!Doctype HTML>
<html lang ="ja">
    
    <head>
     <meta charset="utf-8">
     <title>Blog</title>
   </head>
   
   <body class="anitialiased">
       <h1 class="title">編集画面</h1>
      <div class="content">
     <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="content_title">
            <h2>Title</h2>
            <input type="text"  name=post[title] value= "{{ ($post->title) }}">
        </div>
        
        <div class="content__body">
            <h2>本文</h2>
            <textarea name="post[body]">{{ $post->body }}"></textarea>
        </div>
        
        <input type="submit" value="保存">
     </form>
     </div>
        <div class="footer">
            <a href="/posts/{{ $post->id }}">戻る</a>
        </div>
     </div>
   </body>

</html>