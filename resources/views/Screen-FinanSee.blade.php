<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="initial.css">
    <title>FinanSee</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Image/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <header>
        <div class="logo">
            Finan<span class="span-logo">See<span>
        </div>
        <div class="title">
            <form action="" class="title_form">
                <P class="tag_php">tag php</P></li>
                <input type="submit" name="enviar" value="Sair"></li>
            </form>
        </div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          ['2004/05',  165,      938,         522,             998,           450,      614.6],
          ['2005/06',  135,      1120,        599,             1268,          288,      682],
          ['2006/07',  157,      1167,        587,             807,           397,      623],
          ['2007/08',  139,      1110,        615,             968,           215,      609.4],
          ['2008/09',  136,      691,         629,             1026,          366,      569.6]
        ]);

        var options = {
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    </header>
    <div class="caixa">
            <form action="" class="preencher_dados">
                <input class="text" name="" value="" placeholder="Gasto">
                <input class="number" name="" value="" placeholder="Valor">
                <input class="date" name="" value="" placeholder="Data">
                <button class="submit">Inserir</button>
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
    
    <div class="chart-section">
        <div class="chart-box">
            <div class="chart" id="chart_div">
            </div>
        </div>
    </div>
</body>
</html>