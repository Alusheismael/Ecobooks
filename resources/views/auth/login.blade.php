<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet"> <!-- Incluir el CSS personalizado -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- FontAwesome Iconos -->
</head>

<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{ asset('images/image.png') }}" alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem; object-fit: cover;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                    <div class="d-flex flex-column align-items-center mb-3 pb-1">
                      <img src="{{ asset('images/logo_EcoBooks.jpg') }}" alt="Logo del Negocio" class="img-fluid" style="max-width: 150px;">
                      <span class="h1 fw-bold mb-0 mt-2">EcoBooks</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h5>

                    <div class="form-outline mb-4">
                      <input type="text" id="email" class="form-control form-control-lg" name="email" required autocomplete="off" autofocus />
                      <label class="form-label" for="email">Correo</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="password" class="form-control form-control-lg" name="password" required autocomplete="new-password" />
                      <label class="form-label" for="password">Contraseña</label>
                    </div>

                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label" for="remember">
                        Recuerdame
                      </label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-custom btn-lg btn-block" type="submit">Iniciar</button>
                    </div>

                    <div class="center-text">
                      <a class="small text-muted" href="{{ route('password.request') }}">Olvidó su contraseña?</a>
                      <p class="mb-0 pb-lg-2">No tiene Cuenta?</p>
                      <a href="{{ route('register') }}" class="highlight-link">Regístrese aquí</a>
                    </div>
                    <p class="mt-5 small text-muted center-text">
                      <a href="#!" class="small text-muted">Términos de uso.</a>
                      <a href="#!" class="small text-muted">Política de privacidad</a>
                    </p>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>