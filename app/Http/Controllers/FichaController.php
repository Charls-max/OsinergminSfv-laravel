<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Ficha;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->wantsJson()){
            return Ficha::where('user_id', auth()->id())->get();
        }else{     
           return view('fichas');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $ficha = new Ficha();
        // $ficha->localidad = $request->localidad;
        // $ficha->D1FE = $request->D1FE;     
        // $ficha->D2FE = $request->D2FE;
        // $ficha->D3FE = $request->D3FE;
        // $ficha->D4FE = $request->D4FE;
        // $ficha->D1FF = $request->D1FF;
        // $ficha->D2FF = $request->D2FF;
        // $ficha->D3FF = $request->D3FF;
        // $ficha->D4FF = $request->D4FF;
        // $ficha->Comentarios = $request->Comentarios;
        // $ficha->Resultado = $request->Resultado;  
        // $ficha->empresa_id = $request->empresa_id;
        // $ficha->user_id = auth()->id();
        // $ficha->save();
        // return $ficha;
    }

    public function getEmpresas(Request $request)
    {
        $listEmpresas=DB::table('empresas')->get();

        print_r('empresas'); exit;   


        // $emp=Ficha::all();
        // $data=[];
        // $data[0]=[
        //     'id' => 0,
        //     'text' => 'Seleccione',
        // ];
        // foreach ($emp as $key => $value) {
        //     $data[$key+1]=[
        //         'id' => $value->id,
        //         'text' => $value->nombre
        //     ];
        // }
        // return response()->json($data);
        

        // if($request->ajax){
        //     $emp=Empresa::where('empresa_id', $request->empresa_id)->get();
        //     foreach ($emp as $emp) {
        //         $empArray[$emp->id] = $emp->name;
        //     }
        //     return response()->json($empArray);
        // }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
