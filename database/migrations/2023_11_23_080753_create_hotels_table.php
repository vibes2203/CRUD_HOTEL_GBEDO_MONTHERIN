<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->string('nom_chambre');
            $table->string('prix');
            $table->integer('nombre_de_lits');
            $table->integer('max_adultes')->nullable();
            $table->integer('enfants_max')->nullable();
            $table->text('attributs');
            $table->enum('statut', ['Disponible', 'Non disponible']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
