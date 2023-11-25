<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signon-FinanSee.css">
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
            <form action="{{ route('register.post') }}" method="post" class="preencher_dados">
                @csrf
                <input type="email" class="text" name="email" placeholder="Login" maxlength="100" required>
                <input type="password" class="number" name="password" placeholder="Senha" maxlength="60" required>
                <input type="password" class="number" name="passwordConfirm" placeholder="Confirmar senha" required>

                <input type="submit" value="Cadastrar" class="submit">
                @if($created === false)
                    <p>Ocorreu um problema ao </p>
                @endif
                <a href="{{ route('login.get') }}" class="login">Já tem uma conta?</a>
            </form>
        </div>
    </div>
</body>
</html>