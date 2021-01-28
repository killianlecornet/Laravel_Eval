@extends('layout')

@section('contenu')

    <div id="login">
        <h3 class="text-center text-white pt-3">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/connexion" method="post">
                            {{csrf_field()}}
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                                @if($errors->has('email'))
                                    <small id="emailHelp" class="form-text text-muted">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                @if($errors->has('password'))
                                    <small id="emailHelp" class="form-text text-muted">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Vous n'avez pas de compte cliquez <a href=/inscription>ici</a></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Valider">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection