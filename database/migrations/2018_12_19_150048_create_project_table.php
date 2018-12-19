<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateProjectTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('project',function(Blueprint $table){
            $table->increments("id");
            $table->string("title")->nullable();
            $table->text("content")->nullable();
            $table->string("client_name")->nullable();
            $table->string("project_name")->nullable();
            $table->date("created_date")->nullable();
            $table->enum("category", ["Mechanical Design", "Automation Production", "Outsourcing", "Consulting"])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project');
    }

}