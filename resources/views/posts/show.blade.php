<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Kagurazaka</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
     <ul>
       <li>
        <a href="{{ url('/') }}" class="header-menu">TOP</a>
       </li>
       <li>
        <a href="" class="header-menu">MAP</a>
       </li>
     </ur>
    </header>
    <h1>Kagurazaka</h1>

    <div class="container">
      <main>
       <img>
      </main>

      <nav>
        <ul>
         <!-- <li id="play">Play</li>
         <li id="pause" class="hidden">Pause</li> -->
         <li id="prev">&lt;</li>
         <li id="next">&gt;</li>
        </ul>
      </nav>

        <ul class="thumbnails">
        </ul>
     </div>



    <div class="comment">
     <h2>{{ $post->title }}</h2>

     <p class="block">{!! nl2br(e($post->body)) !!}</P>

     <p>{{ $post->Address }}</P>
     <p>{{ $post->Tel }}</P>
     <p>{{ $post->Website }}</P>

    </div>



     <script src="/js/main.js"></script>

</body>
</html>
