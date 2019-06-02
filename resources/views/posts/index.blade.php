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
     <li>
      <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
     </li>
    </ur>
  </header>
    <h1>Kagurazaka</h1>
    <ul>
      @foreach ($posts as $post)
      <li>
        <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
        <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
      </li>
      @endforeach

</body>
</html>
