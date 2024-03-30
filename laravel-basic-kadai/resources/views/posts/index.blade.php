<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>Laravel課題</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <main>
      <h1>投稿一覧</h1>
      <hr>
      <table border="2">
        <tr>
           <th><h2>タイトル</h2></th>
           <th><h2>本文</h2></th>
        </tr>
        @foreach($posts as $post)
          <tr>
            <td>{{ $post-> title}}</td>
            <td>{{ $post-> content}}</td>
          </tr>
        @endforeach
      </table>
    </main>
  </body>
</html>