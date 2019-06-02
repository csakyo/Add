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

    <form method="post" action="{{ url('/posts') }}">
      {{ csrf_field() }}


      <p>
        <input type="text" name="title" placeholder="enter title">
      </p>
      
      <p>
        <textarea name="body" placeholder="enter body"></textarea>
      </p>
      <p>
        <input type="text" name="Address" placeholder="enter Address">
      </p>
      <p>
        <input type="text" name="Tel" placeholder="enter Tel">
      </p>
      <p>
        <input type="text" name="Website" placeholder="enter Website">
      </p>

      <p>
        <input type="submit" value="Add">
      </p>
    </form>

</body>
</html>
