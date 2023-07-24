<! Doctype html>
<html lang ="ja">
    <head>
        <meta charset="utf-8">
        <link rel="styleheet">
         <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <div class="post-title">
            <h1 class="title">
                {{$post->title}}
            </h1>
        <div class="content">
             <div class="content_post">
                 <h3>本文</h3>
                 <p class="body">{{ $post->body }}</p>
                </div>
          </div>
          
           <div class='edit'> 
           <a href="/posts/{{ $post->id }}/edit">edit</a> 
           </div>
          
          <div class="footer">
              <a href="/">戻る</a>
          </div>
         
    </body>
</html>

