@extends('layouts.app')

@section('template_title')
    {{ $sede->name ?? 'Show Sede' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sede</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sede.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $sede->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $sede->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
