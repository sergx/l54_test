<?php
// Создано командой в терминале
// php artisan make:migration add_user_id_to_posts
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Добавим поле user_id к таблице users
        Schema::table('posts', function($table){
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Убираем поле user_id из таблицы users
        Schema::table('posts', function($table){
            $table->dropColumn('user_id');
        });
    }
}
