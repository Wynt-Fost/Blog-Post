<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id(); // Creates ID field that is also primary key in our table
            // code added
            $table->text('title'); // title of blog post
            $table->text('body'); // Body of blog post
            $table->text('user_id'); // user_id of blog post author
            // end of code added
            $table->timestamps(); // Creates two TIMESTAMP fields (created_at & updated_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};
