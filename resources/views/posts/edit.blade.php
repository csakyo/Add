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

    <form method="post" action="{{ url('/posts', $post->id) }}">
      {{ csrf_field() }}
      {{ method_field('patch') }}


      <p>
        <input type="text" name="title" placeholder="enter title" value="{{
          old('title', $post->title) }}">
      </p>
      <p>
        <textarea name="body" placeholder="enter body">{{ old('body', $post->body)
        }}</textarea>
      </p>
      <p>
        <input type="text" name="Address" placeholder="enter Address" value="{{
          old('Address', $post->Address) }}">
      </p>
      <p>
        <input type="text" name="Tel" placeholder="enter Tel" value="{{
          old('value', $post->Tel)}}">
      </p>
      <p>
        <input type="text" name="Website" placeholder="enter Website"value="{{
          old('Website', $post->Website)}}">
      </p>

      <p>
        <input type="submit" value="Update">
      </p>
    </form>

</body>
</html>
