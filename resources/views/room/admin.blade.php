@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-2">
            <a href="{{ url()->previous() }}" class="btn btn-light border border-secondary btn-sm">
                <i class="fa fa-caret-square-o-left" aria-hidden="true"></i>
            </a>
        </div>
        <div class="col-8">
            <h1 class="text-center">Acceso room 911</h1>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-12">

            <div class="row my-1">
                <div class="col">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-user"></i> Nuevo usuario
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col form-inline justify-content-between">
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="text" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1"
                                placeholder="Departamento">
                            <option>- Escoge un departamento -</option>
                            <option>Administración</option>
                            <option>Contabilidad</option>
                            <option>Limpieza</option>
                            <option>Mantenimiento</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label mr-1"><i class="fa fa-calendar mr-1"></i>Incio</label>
                        <input class="form-control form-control-sm" type="date" placeholder="Default input">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label mr-1"><i class="fa fa-calendar mr-1"></i> Desde</label>
                        <input class="form-control form-control-sm" type="date" placeholder="Default input">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-sm"><i class="fa fa-search"></i> Buscar</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" id="table_user">
                    @include('room.table')
                </div>
            </div>
            @include('room.modal')
        </div>
        <div class="col-auto mx-auto">
            {{ $users->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
@endsection
@section('main-script')

@endsection