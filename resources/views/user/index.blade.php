@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-auto mr-auto">
            <a href="{{ url()->previous() }}" class="btn btn-light border border-secondary btn-sm">
                <i class="fa fa-caret-square-o-left" aria-hidden="true"></i>
            </a>
        </div>
        <div class="col-auto">
            <button id="btn-edit-form" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
        </div>
    </div>
    @if (count($errors)>0)
        <div class="row mt-2">
            <div class="col">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="row mt-3 mb-5">
        <div class="col">
            <div class="media row">
                <img class="col-sm-4 d-flex mr-3"
                     src="https://vice-images.vice.com/images/content-images-crops/2016/08/01/ocho-horas-perfectas-amarna-miller-body-image-1470039200-size_1000.jpg?output-quality=75"
                     alt="Generic placeholder image" style="width: 100%">

                <div class="media-body col-auto my-3">
                    {!! Form::open(['url' => 'user/'.$user->id , 'method' => 'put']) !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name" class="col-form-label"><i class="fa fa-user"></i> Nombre</label>
                                <input type="text" readonly class="d-block form-control-sm  form-control-plaintext"
                                       id="first_name" name="first_name" value="{{ $user->first_name }}"
                                       placeholder="first_name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="middle_name" class="col-form-label"><i class="fa fa-user"></i> 2ª
                                    Nombre</label>
                                <input type="text" readonly class="d-block form-control-plaintext form-control-sm"
                                       id="middle_name" name="middle_name" value="{{ $user->middle_name }}"
                                       placeholder="middle_name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name" class="col-form-label"><i class="fa fa-user"></i>
                                    Apellidos</label>
                                <input type="text" readonly class="d-block form-control-plaintext form-control-sm"
                                       id="last_name" name="last_name" placeholder="last_name"
                                       value="{{ $user->last_name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"><i class="fa fa-envelope"></i> Correo electronico</label>
                            <input type="email" readonly class="d-block form-control-plaintext form-control-sm"
                                   id="email" name="email" placeholder="Correo electronico" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="id_card" class="col-form-label"><i class="fa fa-credit-card"></i> Card
                                ID</label>
                            <input type="text" readonly class="d-block form-control-plaintext form-control-sm"
                                   id="id_card" name="id_card" placeholder="card_id" value="{{ $user->id_card }}"
                                   required>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="type_id" class="col-form-label"><i class="fa fa-list-alt"></i> Tipo de
                                    usuario</label>
                                <select name="type_user_id" id="type_user_id" disabled="true"
                                        class="d-block form-control-plaintext form-control-sm" required="required"
                                        value="{{ $user->type_user_id }}">
                                    @foreach($type_users as $type_user)
                                        @if($type_user->id == $user->type_user()->id)
                                            <option value="{{ $type_user->id }}"
                                                    selected>{{ $type_user->type }}</option>
                                        @else
                                            <option value="{{ $type_user->id }}">{{ $type_user->type }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="department_id" class="col-form-label"><i class="fa fa-list-alt"></i>
                                    Departamento</label>
                                <select name="department_id" id="department_id" disabled="true"
                                        class="d-block form-control-plaintext form-control-sm">
                                    @foreach($departaments as $department)
                                        @if($department->id == $user->department()->id)
                                            <option value="{{ $department->id }}"
                                                    selected>{{ $department->department }}</option>
                                        @else
                                            <option value="{{ $department->id }}">{{ $department->department }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="status" class="col-form-label"><i class="fa fa-key"></i>
                                    Estado</label>
                                {!! Form::checkbox('status', $user->status , true) !!}
                            </div>
                            <div class="form-group col-md-3">
                                <label for="access_room" class="col-form-label"><i class="fa fa-key"></i>
                                    Acceso habitación</label>
                                {!! Form::checkbox('access_room', $user->access_room , true) !!}
                            </div>
                        </div>
                        <div id="row-pass" class="form-row form-row-edit d-none">
                            <div class="form-group col-md-6">
                                <label for="password" class="col-form-label"><i class="fa fa-key"></i>
                                    Contraseña</label>
                                <input type="password" readonly class="d-block form-control-plaintext form-control-sm"
                                       id="password" name="password" placeholder="Contraseña">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password" class="col-form-label"><i class="fa fa-key"></i> Confirmar
                                    contraseña</label>
                                <input type="password" name="password_confirmation" readonly
                                       class="d-block form-control-plaintext form-control-sm"
                                       id="password_confirmation" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-row justify-content-center form-row-edit d-none">
                            <div class="col-5">
                                <button type="submit" class="btn btn-success btn-block"><i class="fa fa-hdd-o"></i>
                                    Guardar
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
