@extends('layout')

@section('contenu')

    <div id="register">
        <h3 class="text-center text-white pt-3">Register form</h3>
        <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <form id="register-form" class="form" action="/inscription" method="post">
                            {{csrf_field()}}
                            <h3 class="text-center text-info">Register</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" value = {{ old('email') }}>
                                @if($errors->has('email'))
                                    <p>{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name" class="text-info">Name:</label><br>
                                <input type="string" name="name" id="name" class="form-control">
                                @if($errors->has('name'))
                                    <p>{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                @if($errors->has('password'))
                                    <p>{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="text-info">Password confirmation:</label><br>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                @if($errors->has('password_confirmation'))
                                    <p>{{ $errors->first('password_confirmation') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Valider"><br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection