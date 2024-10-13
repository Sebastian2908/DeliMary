@extends('layouts.default')
@section('content')
<div class="container mt-4 mb-4">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <h4 class="card-header">Iniciar Sesion</h4>

            <ul class="mt-2">
                @foreach ($errors->all() as $error)
                <li style="color: red">
                    {{$error}}
                </li>
                @endforeach
            </ul>
            <div class="card-body">
              <form method="POST" action="{{ route('login') }}" class="rd-form">
                @csrf

                <div class="row row-20 gutters-20">

                  <div class="col-md-6">
                    <div class="form-wrap">
                      <label for="email" class="form-label">Correo</label>

                      <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}">

                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-wrap">
                      <label for="password" class="form-label">Password</label>

                      <input id="password" type="password" class="form-input" name="password">

                    </div>
                  </div>

                </div>
                <br>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <div class="form-check ml4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember" class="form-check-lable">
                                Recuerdame
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                      Iniciar Sesion
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection