<?php

use App\Empresa;
use App\Tarifa;
use App\Distrito;
use App\Region;
use App\Ficha;
use Illuminate\Database\Seeder;

class FichasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        
        Empresa::truncate(); // Evita duplicar datos
        
        $empresa = new Empresa();
        $empresa->nombre = "Hidrandina";
        $empresa->descripcion = "Descripcion 1";
        $empresa->ruc = intval(20132023542);
        $empresa->user_id = 1;
        $empresa->save();

        $empresa = new Empresa();
        $empresa->nombre = "Enel Distribucion";
        $empresa->descripcion = "Descripcion 2";
        $empresa->ruc = intval(20269985902);
        $empresa->user_id = 1;
        $empresa->save();

        Tarifa::truncate(); // Evita duplicar datos

        $tarifa = new Tarifa();
        $tarifa->codigo = "Tarifa 1";
        $tarifa->tipo = "Comercial";
        $tarifa->save();

        $tarifa = new Tarifa();
        $tarifa->codigo = "Tarifa 2";
        $tarifa->tipo = "Domestico";
        $tarifa->save();

        Distrito::truncate(); // Evita duplicar datos

        $distrito = new Distrito();
        $distrito->nombre = "San Blas";        
        $distrito->save();

        $distrito = new Distrito();
        $distrito->nombre = "Santa Luzmila";        
        $distrito->save();

        Region::truncate(); // Evita duplicar datos

        $distrito = new Region();
        $distrito->nombre = "San Martin";        
        $distrito->save();

        $distrito = new Region();
        $distrito->nombre = "Moyobamba";        
        $distrito->save();

        Ficha::truncate(); // Evita duplicar datos
        
        $ficha = new Ficha();
        $ficha->localidad = "Shucllapampa";
        $ficha->D1FE = "Potencia 65W, S";
        $ficha->D2FE = "Corriente 10A, S";
        $ficha->D3FE = "Capacidad 92Ah, S";
        $ficha->D4FE = "Potencia 85W, S";
        $ficha->D1FF = "Tension 16.7, N";
        $ficha->D2FF = "Tension 12.8, S";        $ficha->D3FF = "Tension 12.8, S";
        $ficha->D4FF = "Tension 11.8, N";
        $ficha->Comentarios = "Sin observaciones"; 
        $ficha->Resultado = "Si Cumple";       
        $ficha->tarifa_id = 1;
        $ficha->empresa_id = 1; 
        $ficha->region_id = 1;
        // $ficha->distrito_id = 1;
        $ficha->save();

        $ficha->distritos()->attach([1]); //Relacionar la ficha a un distrito

        $ficha = new Ficha();
        $ficha->localidad = "Contumasa";
        $ficha->D1FE = "Potencia 45W, S";
        $ficha->D2FE = "Corriente 8A, S";
        $ficha->D3FE = "Capacidad 72Ah, S";
        $ficha->D4FE = "Potencia 95W, S";
        $ficha->D1FF = "Tension 19.7, N";
        $ficha->D2FF = "Tension 11.8, S";        $ficha->D3FF = "Tension 10.8, S";
        $ficha->D4FF = "Tension 12.8, N";
        $ficha->Comentarios = "Se obtuvieron las siguientes observaciones: No cuenta con pararayos y 01 transformador averiado";
        $ficha->Resultado = "No Cumple";
        $ficha->tarifa_id = 2;
        $ficha->empresa_id = 2; 
        $ficha->region_id = 2;
        // $ficha->distrito_id = 2;
        $ficha->save();

        $ficha->distritos()->attach([2]); //Relacionar la ficha a un distrito

    }
}
