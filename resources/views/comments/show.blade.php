<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>コメント</title>
</head>
<body>
  <h1>コメント</h1>
  <dl>
    <dt>ID: </dt>
    <dd>{{ $comment->_id }}</dd>
    <dt>Title: </dt>
    <dd>{{ $comment->title }}</dd>
    <dt>Body: </dt>
    <dd>{{ $comment->body }}</dd>
    <dt>Created_at: </dt>
    <dd>{{ $comment->created_at }}</dd>
    <dt>Updated_at: </dt>
    <dd>{{ $comment->updated_at }}</dd>
  </dl>
  <p>
    <a href="{{ action('CommentsController@edit', $comment->_id) }}">
      ［編集］
    </a>
  </p>
  <div>
    <form action="{{ action('CommentsController@destroy', $comment->_id) }}" method="post">
      @csrf
      @method('DELETE')
      <button>コメント投稿の削除</button>
    </form>
  </div>
</body>
</html>