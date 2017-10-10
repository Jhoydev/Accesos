@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="" required autofocus>
                                @if ($errors->has('first_name'))
                                <span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                            <label for="middle_name" class="col-md-4 control-label">Middle name</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="text" class="form-control" name="middle_name" value="">
                                @if ($errors->has('middle_name'))
                                <span class="help-block"><strong>{{ $errors->first('middle_name') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="" required>

                                @if ($errors->has('last_name'))
                                <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('id_card') ? ' has-error' : '' }}">
                            <label for="id_card" class="col-md-4 control-label">ID Card</label>

                            <div class="col-md-6">
                                <input id="id_card" type="text" class="form-control" name="id_card" value="" required>
                                @if ($errors->has('id_card'))
                                <span class="help-block"><strong>{{ $errors->first('id_card') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type_user_id" class="col-md-4 control-label">Type user</label>

                            <div class="col-md-6">
                                <select name="type_user_id" id="type_user_id" class="form-control">
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                                @if ($errors->has('type_user_id'))
                                <span class="help-block"><strong>{{ $errors->first('type_user_id') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="department_id" value="1">
                        <input type="hidden" name="status" value="1">
                        <input type="hidden" name="access_room" value="1">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New password</label>

                            <div class="col-md-6">
                                <input id="pas  sword" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
