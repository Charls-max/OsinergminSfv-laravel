<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_empresa');
            $table->string('localidad');
            $table->string('D1FE');
            $table->string('D2FE');
            $table->string('D3FE');
            $table->string('D4FE');
            $table->string('D1FF');
            $table->string('D2FF');
            $table->string('D3FF');
            $table->string('D4FF');
            $table->text('Comentarios')->nullable();
            $table->string('Resultado');
            $table->bigInteger('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');
            
            //Modificando a nullable los 4 foraneos
            $table->unsignedInteger('tarifa_id')->nullable(); // Relación con Tarifa
            // $table->unsignedInteger('empresa_id')->nullable(); // Relación con Empresa  
            $table->unsignedInteger('region_id')->nullable(); // Relación con Region
            $table->unsignedInteger('distrito_id')->nullable(); // Relación con Distrito           
            $table->timestamps();
        }); 
        
        


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
}
