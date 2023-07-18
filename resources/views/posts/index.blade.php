<!Doctype HTML>
<html lang ="ja">
    
<head>
   <meta charset="utf-8">
   <link rel="styleheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    
    
    <div  class="body-content">
     <h1>テーマ</h1>
    @foreach ($posts as $post)
        <div class="body">
         <a href="/posts/{{$post->id}}"><h2 class="title">{{$post->title}}</h2></a>
         <p class="page">{{$post->body}}</p>
        </div>
    @endforeach
    </div>
    <div class="paginate">
        {{$posts->links()}}
    </div>
</body>

</html>