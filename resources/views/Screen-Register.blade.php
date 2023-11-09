<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/register.css">
        <title>FinanSee</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="Image/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="Image/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    </head>
        <body>
            <H1>FinanSee</H1>
                    <form action="{{ route('register.post') }}" method="post">
                        @csrf 
                        <P>CADASTRO</P>
                        <input type="text" name="userName" id="userName" placeholder="Nome De Usuario" required maxlength="100">
                        <input type="email" name="email" id="email" placeholder="E-Mail" required maxlength="100">
                        <input type="password" name="password" id="password" placeholder="Senha" required maxlength="60">
                        <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirmação de Senha" required maxlength="60">
                        <a href="{{ route('home') }}" class="link_page_home"> VOLTAR</a>
                        <input type="submit" value="CADASTRAR" name="register">                       
                    </form>
        </body>
</html>