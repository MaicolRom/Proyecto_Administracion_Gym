@extends('layouts.app')

@section('template_title')
    {{ $afiliado->name ?? 'Show Afiliado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Afiliado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('afiliados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $afiliado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $afiliado->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Nacimiento:</strong>
                            {{ $afiliado->fecha de nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $afiliado->peso }}
                        </div>
                        <div class="form-group">
                            <strong>Suscripcion:</strong>
                            {{ $afiliado->suscripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Objetivo:</strong>
                            {{ $afiliado->objetivo }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $afiliado->email }}
                        </div>
                        <div class="form-group">
                            <strong>Sede Id:</strong>
                            {{ $afiliado->sede_id }}
                        </div>
                        <div class="form-group">
                            <strong>Entrenador Id:</strong>
                            {{ $afiliado->entrenador_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
