<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-FinanSee.css">
    <title>FinanSee</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Image/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <div class="login-section">
        <div class="caixa">
            <div class="logo">
                Finan<span class="span-logo">See<span>
            </div>
            <form action="{{ route('login.post') }}" method="post" class="preencher_dados">
                @csrf
                 <input class="text" name="" value="" placeholder="Login">
                 <input class="number" name="" value="" placeholder="Senha">
                 <a href="{{route('ForgotPassword.post')}}" class="forgotpass">Esqueceu a senha?</a>
                 <button class="submit">Entrar</button>
                 <h3>Não tem uma conta?<h3>
                 <a href="{{ route('register.post') }}" class="sign-on">Cadastre-se</a>
             </form>
        </div>
    </div>
</body>
</html>