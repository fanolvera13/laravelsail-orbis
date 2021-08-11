<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('display_name')->nullable();
            $table->unsignedBigInteger('parent_id');
            $table->integer('order');
            $table->string('slug', 255)->default(NULL);
            $table->string('icono', 255)->default(NULL);
            $table->timestamps();
            
        });
        
        //Crear la tabla que asocia opción de menú con un grupo de rol
        Schema::create('menu_role', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('menu_id');

            $table->foreign('role_id')->references('id')->on('roles')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('menus')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->primary('role_id','menu_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('menu_role');
        Schema::dropIfExists('menus');
    
    }
}
