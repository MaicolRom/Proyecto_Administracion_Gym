@extends('layouts.app')

@section('template_title')
    Afiliado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Afiliado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('afiliados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Apellidos</th>
										<th>Fecha De Nacimiento</th>
										<th>Peso</th>
										<th>Suscripcion</th>
										<th>Objetivo</th>
										<th>Email</th>
										<th>Sede Id</th>
										<th>Entrenador Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($afiliados as $afiliado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $afiliado->nombre }}</td>
											<td>{{ $afiliado->apellidos }}</td>
											<td>{{ $afiliado->fecha de nacimiento }}</td>
											<td>{{ $afiliado->peso }}</td>
											<td>{{ $afiliado->suscripcion }}</td>
											<td>{{ $afiliado->objetivo }}</td>
											<td>{{ $afiliado->email }}</td>
											<td>{{ $afiliado->sede_id }}</td>
											<td>{{ $afiliado->entrenador_id }}</td>

                                            <td>
                                                <form action="{{ route('afiliados.destroy',$afiliado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('afiliados.show',$afiliado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('afiliados.edit',$afiliado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $afiliados->links() !!}
            </div>
        </div>
    </div>
@endsection
