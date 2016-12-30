@extends('admin::layouts.auth')

@section('html.head.title')
    Récupération de mot de passe
@endsection

@section('content')
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ route('admin.home') }}">{!! config('admin.sitename.html') !!}</a>
            </div><!-- /.login-logo -->

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Oups !</strong> Quelques problèmes sont survenus :<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="login-box-body">
                <p class="login-box-msg">Réinitialiser le mot de passe</p>
                {!! Form::open(['route' => 'admin.auth.passwordSendEmail']) !!}
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email"
                               value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                <div class="row">
                    <div class="col-xs-offset-3 col-xs-6">
                        <button type="submit" class="btn btn-default btn-block btn-flat">Envoyer le mail</button>
                    </div><!-- /.col -->
                </div>

                {!! Form::close() !!}

                <div class="row" style="margin-top: 0.5em">
                    <div class="col-xs-6">
                        <a href="{{ route('admin.auth.login') }}">Se connecter</a><br>
                    </div>
                    @if(config('admin.is_registration_open'))
                        <div class="col-xs-6 text-right">
                            <a href="{{ route('admin.auth.register') }}">S'inscrire</a>
                        </div>
                    @endif
                </div>

            </div><!-- /.login-box-body -->

        </div><!-- /.login-box -->

        @include('admin::layouts.partials.html.scripts_auth')
    </body>
@endsection
