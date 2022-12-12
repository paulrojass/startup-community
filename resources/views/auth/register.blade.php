@extends('layouts.login')

@section('content')
<div class="registro">
    <div class="position-relative d-flex align-items-center">
        <div class="position-absolute">
            <img src="img/backgrounds/bg_login_1.png" class="img-fluid" alt="">
        </div>
        <div class=" position-absolute">
            <img src="img/backgrounds/bg_login_2.png" class="img-fluid" alt="">
        </div>
        <div class="d-flex position-absolute">
            <img src="img/backgrounds/bg_login_3.png" class="img-fluid" alt="">
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center" style="height:100vh">
                    <div class="col-12">
                        <a class="theme-link" href="/"><i class="bi bi-arrow-left px-2"></i>Ir atrás</a>
                    </div>            
                    <div class="col-xl-4 col-sm-12">
                        <div class="card-body card-login">
                            <h1 class="mb-5 text-center">Registrarme</h1>
                            <form action="{{ route('register') }}" method="POST" autocomplete="off">
                                @csrf                                  
                                <label> Nombre y Apellido </label>
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label> Email </label>
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>   
                                <label> Contraseña</label>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <label> Confirmar Contraseña</label>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="text-center">
                                    <h2 class="my-5">Emprende, colabora, invierte y DESCARGA</h2>                            
                                    <button type="submit" class="btn btn-primary ">¡VAMOS!</button>                            
                                </div>                          
                            </form>
                            @error('any')
                            <section v-if="message">
                                <p class="text-white text-center">{{$message}}, intente de nuevo</p>
                            </section>
                            @enderror                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
