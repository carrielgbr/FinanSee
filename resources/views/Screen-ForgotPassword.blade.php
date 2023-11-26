<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forgotpass-FinanSee.css">
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
            <form action="{{route('reset.password.post')}}" class="preencher_dados">
                @csrf
                 <h3>Esqueceu sua senha?</h3> 

                 <h5>Insira seu email abaixo que te enviaremos um link de recuperação!</h5>

                 <input type="email" class="text" name="email" value="" placeholder="Seu email cadastrado">
                 <input type="button" class="submit" value="Enviar link">
                 <a href="route('reset.password.post')" class="sign-on">Enviar novamente</button>
             </form>
        </div>
    </div>