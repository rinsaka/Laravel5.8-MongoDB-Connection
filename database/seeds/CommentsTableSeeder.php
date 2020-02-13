<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $comments = array(
          array("最初のコメント", "ああああああ", "2020-02-13 00:00:03", "2020-02-13 00:00:03"),
          array("ふたつめ", "コメント本文", "2020-02-13 20:14:00", "2020-02-13 20:14:00"),
          array("3つ目", "コメント", "2020-02-13 20:16:00", "2020-02-13 20:16:00"),
          array("4つ目のコメント", "本文", "2020-02-13 20:18:00", "2020-02-13 20:18:00"),
          array("あいうてお", "あいうておあいうておあいうておあいうてお", "2020-02-13 20:50:00", "2020-02-13 20:50:00"),
          array("かきくけこ", "かきくけこかきくけこ", "2020-02-13 21:14:00", "2020-02-13 21:14:00"),
          array("さしすせそ", "さしすせそさしすせそ", "2020-02-13 22:14:00", "2020-02-13 22:14:00"),
    );

    foreach ($comments as $c) {
      $comment = new Comment();
      $comment->title = $c[0];
      $comment->bogy = $c[1];
      $comment->created_at = $c[2];
      $comment->updated_at = $c[3];
      $comment->save();
    }
  }
}
