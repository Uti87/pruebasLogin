@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-xl-8 col-11 d-flex justify-content-center text-center">

  </div>
</div>

<section class="row flexbox-container">
  <div class="col-xl-8 col-11 d-flex justify-content-center">
    <div class="card bg-authentication rounded-0 mb-0">
      <div class="row m-0">
        <div class="col-12 p-0">
          <div class="card rounded-0 mb-0 px-2">

            <div class="card-header pb-1">
              <div class="card-title mx-auto my-3">
                <img class="text-center" src="{{ asset('images/logo/logo-green.png') }}" alt="branding logo">
                <h4 class="mb-0 mt-3 text-center">Login</h4>
              </div>
            </div>
            <p class="px-2">Inicie sesión para acceder al panel de control de sitandplug</p>
            <div class="card-content">
              <div class="card-body pt-1">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <fieldset class="form-label-group form-group position-relative">

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="email">Correo electrónico</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </fieldset>

                  <fieldset class="form-label-group position-relative">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">

                    <label for="password">Contraseña</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </fieldset>
                  <div class="form-group d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                    <p>
                      ¿Has olvidado la contraseña?
                      <a class="card-link" href="{{ route('password.request') }}">
                        Restablecer contraseña aquí
                      </a>
                    </p>
                    @endif

                  </div>

                  <div class="form-group d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-inline">Iniciar sesión</button>
                  </div>


                  <p class="text-center">¿Aún no tienes una cuenta? <a href="register" class="card-link">Regístrate</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
