@extends('layouts.login')

@section('content')
<div class="login">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-12">
                <a class="theme-link" href="/"><i class="bi bi-arrow-left px-2"></i>Ir atrás</a>
            </div>       
            <div class="col-xl-4 col-sm-12">                         
                <div class="card-body card-login">
                    <h1 class="mb-5 text-center">Bienvenidos a startup</h1>                        
                    <form method="POST" autocomplete="off" action="{{ route('login') }}">
                    @csrf
                        <label>{{ __('Email Address') }}</label>
                        <div class="form-group">
                            <input type="text" class="form-control" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label>{{ __('Password') }}</label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ">¡VAMOS!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
