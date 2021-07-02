<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfect Smile</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('css/clinic/img/logo__.ico') }}">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css')}} ">

        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <div class=" container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="{{ asset('css/clinic/img/logo_.png')}}" alt=""/>
                    <h3>Perfect Smile</h3>
                    <p>Tratamos de una forma integral cada una de las especialidades. Tratamientos personalizados para una sonrisa perfecta.</p>

                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">{{ __('Forgot your password?') }}</h3>
                            <form action="{{ route('password.email') }}" method = "POST">
                                @csrf
                                <div class="row login-form">
                                    <div class="col-md-9">
                                        <div class="form-group">

                                            <div class="mb-4 text-sm text-gray-600">
                                                {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                            </div>

                                            <input type="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" id="email" name="email" />
                                            @error('email')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>
                                        
                                        <div class="flex items-center justify-end mt-4">

                                            <input type="submit" class="btnRegister"  value="{{ __('Password Reset Link') }}"/>
                                        </div>
                                    </div>
                                
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
