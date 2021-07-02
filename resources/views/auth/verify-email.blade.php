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
                            <h3 class="register-heading"></h3>
                                <div class="row login-form">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <div class="mb-4 text-sm text-gray-600">
                                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                            </div>

                                            @if (session('status') == 'verification-link-sent')
                                                <div class="mb-4 font-medium text-sm text-green-600">
                                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                                </div>
                                            @endif

                                        </div>

                                        <!-- <div class="row"> -->
                                        
                                            <form action="{{ route('verification.send') }}" method = "POST">
                                                @csrf

                                                <div class="flex items-left mt-4">
                                                    <input type="submit" class="btn btn-info"  value="{{ __('Resend Verification Email') }}"/>
                                                </div>
                                            </form>

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <div class="flex items-right mt-3">
                                                    <input type="submit" class="btn btn-secondary"  value="{{ __('Log Out') }}"/>
                                                </div>
    <!-- 
                                                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                                        {{ __('Log Out') }}
                                                    </button> -->
                                            </form>
                                        <!-- </div> -->

                                        
                                    </div>
                                
                                </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </body>
</html>

