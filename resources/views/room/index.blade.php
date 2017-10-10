@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <a href="{{ url()->previous() }}" class="btn btn-light border border-secondary btn-sm">
            <i class="fa fa-caret-square-o-left" aria-hidden="true"></i>
        </a>
    </div>
</div>
<div class="row justify-content-center">
<div class="col-3 text-center">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Check me out
          </label>
      </div>
      <button type="submit" class="btn btn-primary btn-block btn-sm"><i class="fa fa-sign-in"></i> Entrar</button>
  </form>
</div>
</div>
@endsection
