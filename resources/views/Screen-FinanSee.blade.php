<!DOCTYPE html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/initial.css">
    <title>FinanSee</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Image/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
    <body>
        <header>
            <div class="logo">
                Finan<span class="span-logo">See<span>
            </div>
            <div class="title">
                <form action="{{ route('logout') }}" method="POST" class="title_form">
                    @csrf
                    <input type="submit" name="enviar" value="Sair"></li>
                </form>
            </div>
        </header>

        <div class="caixa">
            <form action="{{ route('finansee.index.post') }}" method="POST" class="preencher_dados">
                @csrf
                <div class="ls-custom-select">
                    <select name="selected" class="ls-select" required>
                        <option value="1">Ganhos</option>
                        <option value="0" selected>Perdas</option>
                    </select>
                </div>
                <input class="text" name="Description" placeholder="Descrição" maxlength="254" required>
                <input class="number" name="Value" placeholder="Valor" required>
                <input type="date" class="date" name="Date" placeholder="Data">
                <input type="submit" class="submit" value="Inserir">
            </form>
        </div>

    <div class="result-section">
        <div class="result-box">
            <div class="result">
                <div class="result-gasto">
                    <h4>Salgadinho Doritos Sabor Queijo Nacho 300g</h4>
                </div>
                <div class="result-valor">
                    <h4>R$22,99</h4>
                </div>
                <div class="result-data">
                    <h4>14/11/2023</h4>
                </div>
                    <button class="refresh-btn">
                        <h4>Atualizar</h4>
                    </button>
                    <button class="delete-btn">
                        <h4>Apagar</h4>
                    </button>
                </div>
            </div>
        </div>

        <!-- teste grafico Kayky -->
        <div class="chart-section">
            <div class="chart-box"> 
                <div class="chart"> 
                    <div id="grafico">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(desenharGrafico);
            </script>
        </div>
    </body>
</html>