@extends('layouts.app')

@section('template_title')
    {{ $entrenadore->name ?? 'Show Entrenadore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Entrenadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrenadores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $entrenadore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $entrenadore->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Fechadenacimiento:</strong>
                            {{ $entrenadore->fechaDeNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Sueldo:</strong>
                            {{ $entrenadore->sueldo }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $entrenadore->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
