<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
  // MongoDB のコネクションを指定する
  protected $connection = 'mongodb';
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    // Schema::connection($this->connection)
    //   ->table('comments', function (Blueprint $collection)
    //   {
    //     $collection->string('title');
    //     $collection->string('body');
    //   });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::connection($this->connection)
      ->table('comments', function (Blueprint $collection)
      {
        $collection->drop();
      });
  }
}
