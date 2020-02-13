<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;  // ここをコメントアウトする
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Comment extends Moloquent
{
  // データベースのコレクション名を指定する
  // （RDM のテーブル名のようなイメージ）
  protected $collection = 'comments';
}
