<?php

use App\User;
use App\Empresa;
use App\FichaRegistro;
use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
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
        $empresa->nombre = "Empresa 1";
        $empresa->descripcion = "Descr 1";
        $empresa->ruc = "20505028482";
        $empresa->user_id = Auth::id();
       // $empresa->user_id = User::find($id);
        $empresa->save();

        $empresa = new Empresa();
        $empresa->nombre = "Empresa 2";
        $empresa->descripcion = "Descr 2";
        $empresa->ruc = "20505028481";
        $empresa->user_id = Auth::id();
        $empresa->save();

        FichaRegistro::truncate(); // Evita duplicar datos

        $empresa = new FichaRegistro();
        $empresa->codigo = "Emp1";
        $empresa->empresa_id = "1";
        $empresa->save();


    }
}
