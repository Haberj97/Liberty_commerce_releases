<?php

// migration pour vérifier si l'utilisateurs est connecté
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class AddNewColumnLastSeen extends Migration
{
/**
*Run the migrations.
*
*@return void
*/
public function up()
{
     Schema::table('users', function(Blueprint $table){
     $table->timestamp('last_seen')->nullable();
});
}
/**
*Reverse the migrations.
*
*@return void
*/
public function down()
{
}
}