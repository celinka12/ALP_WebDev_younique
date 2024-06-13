<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta required name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="icon" href="{{ asset('assets/img/core-img/favicon.ico') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: repeating-linear-gradient(45deg, hsla(112, 98%, 100%, 0.05) 0px, hsla(112, 98%, 100%, 0.05) 1px, transparent 1px, transparent 11px, hsla(112, 98%, 100%, 0.05) 11px, hsla(112, 98%, 100%, 0.05) 12px, transparent 12px, transparent 32px), repeating-linear-gradient(90deg, hsla(112, 98%, 100%, 0.05) 0px, hsla(112, 98%, 100%, 0.05) 1px, transparent 1px, transparent 11px, hsla(112, 98%, 100%, 0.05) 11px, hsla(112, 98%, 100%, 0.05) 12px, transparent 12px, transparent 32px), repeating-linear-gradient(0deg, hsla(112, 98%, 100%, 0.05) 0px, hsla(112, 98%, 100%, 0.05) 1px, transparent 1px, transparent 11px, hsla(112, 98%, 100%, 0.05) 11px, hsla(112, 98%, 100%, 0.05) 12px, transparent 12px, transparent 32px), repeating-linear-gradient(90deg, hsla(112, 98%, 100%, 0.05) 0px, hsla(112, 98%, 100%, 0.05) 1px, transparent 1px, transparent 11px, hsla(112, 98%, 100%, 0.05) 11px, hsla(112, 98%, 100%, 0.05) 12px, transparent 12px, transparent 32px), linear-gradient(90deg, rgb(229, 94, 170), rgb(247, 192, 238));
        }

        .btn-register {
            background-color: #ff084e;
            color: #fff;
        }

        .btn-register:hover,
        .btn-register:focus {
            background-color: #3a3a3a;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="text-center" style="margin-top:-140px">
        <!-- Menambahkan margin atas hanya pada tampilan medium dan di atasnya -->
        <img src="{{ asset('assets/img/core-img/brand Logo.png') }}" class="img-fluid" alt="">
    </div>
    <div class="container mb-5" style="margin-top: -140px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Forget Password</h5>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $email ?? old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Masukan Password...">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password...">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-register mt-3">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
