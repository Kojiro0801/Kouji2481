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
    
     <h1>Blog Name</h1>
     <div class="post">
    @foreach ($posts as $post)
        <div class="body">
        <a href="/posts/create">登録</a>
         <a href="/posts/{{$post->id}}"><h2 class="title">{{$post->title}}</h2></a>
         <p class="page">{{$post->body}}</p>
         <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
             @csrf
             @method('DELETE')
         <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
         </form>
        </div>
    @endforeach
    </div>
    
    <div class="paginate"> {{ $posts->links() }} </div>
    <script>
        function deletePost(id)
        {
            'use strict'
            
            if (confirm('削除すると復元できません。\n本当に削除しますか?')) {
                document.getElementById(`form_${id}`) . submit();
            }
        }
    </script>
</body>

</html>