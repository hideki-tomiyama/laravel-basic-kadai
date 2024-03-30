<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>Laravel課題</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>
  <body>
    <h1>投稿作成</h1>

    <!-- エラーチェック -->
    @if ($errors->any())
      <div>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <!-- データ登録 -->
    <form action="{{ route('posts.store')}}" method="POST">
      @csrf
      <table>
        <tr>
          <th>タイトル</th>
          <td>
            <input type="text" name="title">
          </td>
        </tr>
        <tr>
          <th>本文</th>
          <td>
            <textarea name="content" cols="30" rows="10"></textarea>
          </td>
        </tr>
      </table>
      <input type="submit" value="投稿">
    </form>
  </body>
</html>