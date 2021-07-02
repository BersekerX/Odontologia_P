<!DOCTYPE html>
<html lang="en">
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

        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="{{ asset('css/clinic/img/logo_.png')}}" alt=""/>
                    <h3>Perfect Smile</h3>
                    <p>Contamos con los mejores especialistas para cada uno de los miembros de tu familia, con el objetivo de verte feliz</p>
                    <!-- <input type="submit" name="" value="Iniciar Sesión"/><br/> -->
                    <a  href="{{ route('login') }}"><input type="submit" name="" value="Iniciar Sesión"/></a><br>

                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">{{ __('Register') }}</h3>
                            <form action="{{ route('register') }}" method = "POST">
                                @csrf
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{ __('Name') }}" value="{{ old('name') }}" id="name" name="name" />
                                            @error('name')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{ __('Last Name') }}" value="{{ old('lastname') }}"  id="lastname" name="lastname"/>
                                            @error('lastname')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="{{ __('Password') }}" value="{{ old('password') }}" id="password" name="password" />
                                            @error('password')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="{{ __('Confirm Password') }}" value="" id="password_confirmation" name="password_confirmation" />
                                            @error('password_confirmation')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="masculino" checked>
                                                    <span> {{ __('Male') }} </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="femenino">
                                                    <span>{{ __('Female') }} </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" id="email" name="email"/>
                                            @error('email')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{ __('Phone') }}" value="{{ old('phone') }}" id="phone" name="phone" />
                                            @error('phone')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="{{ __('Birthdate') }}" value="{{ old('birthdate') }}" id="birthdate" name="birthdate"/>
                                            @error('birthdate')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="speciality">
                                                <option class="hidden"  selected disabled>{{ __('Select A Speciality') }}</option>
                                                <option value="Odontólogo">Odontólogo</option>
                                                <option value="Ortodoncista">Ortodoncista</option>
                                                <option value="Endodoncista">Endodoncista</option>
                                                <option value="Odontopediatra">Odontopediatra</option>
                                                <option value="Periodoncista">Periodoncista</option>
                                                <option value="Prostodoncista">Prostodoncista</option>
                                                <option value="Cirujano">Cirujano</option>
                                            </select>
                                            @error('speciality')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="rol">
                                                <option class="hidden"  selected disabled>{{ __('Select A Rol') }}</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Dentista">Dentista</option>
                                            </select>
                                            @error('rol')
                                                <div><label style="color:#DC3545">{{ $message }}</label></div>
                                            @enderror
                                        </div>

                                        <input type="submit" class="btnRegister"  value="{{ __('Register') }}"/>
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