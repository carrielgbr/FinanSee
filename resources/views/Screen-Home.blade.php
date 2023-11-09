<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/app.css">
            <title>FinanSee</title>
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="Image/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="Image/favicon-16x16.png">
            <link rel="manifest" href="/site.webmanifest">
        </head>
        <body>
            <header id="titulo">
                <h1>FinanSee</h1>
            </header>
            <section class="login_cad">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf 
                    <P>LOGIN</P>
                    <div class="textBox">
                        <input type="email" name="email" id="email" placeholder="E-MAIL" required maxlength="100">
                        <input type="password" name="password" id="password" placeholder="SENHA" required maxlength="60">
                    </div>
                    <input type="submit" name="login" value="LOGIN" class="login"><br>
                    <a href="{{ route('register') }}" class="link_page_cadastro" >Cadastrar</a>
                </form>
            </section>
        </body>
</html>