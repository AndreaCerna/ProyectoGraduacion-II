@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Ver') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre Usuario:</strong>
                            {{ $usuario->nombre_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Email Usuario:</strong>
                            {{ $usuario->email_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Cargos Id:</strong>
                            {{ $usuario->cargos_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
