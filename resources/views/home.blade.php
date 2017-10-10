@extends('layouts.main')

@section('content')
<div class="row  justify-content-center">
    @if(Auth::user()->type_user_id == 1)
    <div class="col-auto">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="https://i6.fuskator.com/large/cSbDGTvDsL8/Mature-Blonde-MILF-Phoenix-Marie-Wearing-Platform-High-Heels-in-Office-2.jpg" height="230" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Accesos</h4>
                <p class="card-text"><small>Control de accesos a la habitacion 911</small></p>
                <a href="{{ url('admin') }}" class="btn btn-primary btn-sm btn-block"><i class="fa fa-sign-in"></i> Entrar</a>
            </div>
        </div>
    </div>
    @endif
    <div class="col-auto">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="https://b.porngals4.com/media/galleries/1/11/59298-1141701326/alexis-texas-hot-nurse-is-hot-4998268-145877062.jpg" height="230" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Room 911</h4>
                <p class="card-text"><small>Solo personal autorizado.</small></p>
                <a href="{{ url('room') }}" class="btn btn-primary btn-sm btn-block"><i class="fa fa-sign-in"></i> Entrar</a>
            </div>
        </div>
    </div>
    <div class="col-auto">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="https://b.porngals4.com/media/galleries/1/11/59298-1141701326/alexis-texas-hot-nurse-is-hot-4998268-145877062.jpg" height="230" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Room 900</h4>
                <p class="card-text"><small>Habitación común</small></p>
                <a href="#" class="btn btn-primary btn-sm btn-block"><i class="fa fa-sign-in"></i> Entrar</a>
            </div>
        </div>
    </div>
</div>
@endsection
