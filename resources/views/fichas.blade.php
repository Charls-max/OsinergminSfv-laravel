@extends('layouts.app')
@extends('master')
@section('content')
@inject('faculties', 'App\Services\Faculties')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administrar Fichas:</div>

                <div class="card-body">       
                                        
                    <fichas />

                </div>                
            </div>            
        </div>
    </div>
</div>

@endsection

