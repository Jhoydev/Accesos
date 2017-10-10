<div class="media-body col-auto my-3">
    {!! Form::open() !!}
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="first_name" class="col-form-label"><i class="fa fa-user"></i> Nombre</label>
            <input type="text" class="form-control form-control-sm "
                   id="first_name" name="first_name" value="{{ $user->first_name }}"
                   placeholder="first_name">
        </div>
        <div class="form-group col-md-4">
            <label for="middle_name" class="col-form-label"><i class="fa fa-user"></i> 2ª
                Nombre</label>
            <input type="text" class="d-block form-control form-control-sm"
                   id="middle_name" name="middle_name" value="{{ $user->middle_name }}"
                   placeholder="middle_name">
        </div>
        <div class="form-group col-md-4">
            <label for="last_name" class="col-form-label"><i class="fa fa-user"></i>
                Apellidos</label>
            <input type="text" class="d-block form-control form-control-sm"
                   id="last_name" name="last_name" placeholder="last_name"
                   value="{{ $user->last_name }}">
        </div>
    </div>
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="email" class="col-form-label"><i class="fa fa-envelope"></i> Correo electronico</label>
            <input type="email" class="d-block form-control form-control-sm"
                   id="email" name="email" placeholder="Correo electronico" value="{{ $user->email }}">
        </div>
        <div class="form-group col-md-6">
            <label for="id_card" class="col-form-label"><i class="fa fa-credit-card"></i> Card
                ID</label>
            <input type="text" class="d-block form-control form-control-sm"
                   id="id_card" name="id_card" placeholder="card_id" value="{{ $user->id_card }}"
                   required>
        </div>
    </div>

    <div class="form-row align-content-center">
        <div class="form-group col-md-3">
            <label for="type_id" class="col-form-label"><i class="fa fa-list-alt"></i> Tipo de
                usuario</label>
            <select name="type_user_id" id="type_user_id" disabled="true"
                    class="d-block form-control form-control-sm" required="required"
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
                    class="d-block form-control form-control-sm">
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
        <div class="form-group col-md-12">
            <label for="password" class="col-form-label"><i class="fa fa-key"></i>
                Contraseña</label>
            <input type="password" class="d-block form-control form-control-sm"
                   id="password" name="password" placeholder="Contraseña">
        </div>
        <div class="form-group col-md-12">
            <label for="password" class="col-form-label"><i class="fa fa-key"></i> Confirmar
                contraseña</label>
            <input type="password" name="password_confirmation"
                   class="d-block form-control form-control-sm"
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