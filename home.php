<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" >
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Disponibilidade', 'Quantidade'],
          ['Disponiveis',     100],
          ['Indisponiveis',     100]
        ]);

        var options = {
          title: 'Produtos disponiveis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Month', 'Sales'],
        ['*',  0 ],
        ['*',  0 ],
        ['*',  0 ],
        ['*',  0 ]
    ]);

    var options = {
      title: 'Lucro',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
  }
</script>

    <title>Home</title>

</head>
<body>
    <aside>
      <div class="menu">
            <ul>
              <li><a href="home.php">Inicio</a></li>
              <li><a href="pedidos_pendentes.php">Pedidos</a></li>
              <li><a href="estoque.php">Estoque</a></li>
              <li><a href="#">Financias</a></li>
              <li><a href="#">Relatorios</a></li>
              <li><a href="clientes.php">Clientes</a></li>
              <li><a href="admin.php">Administradores</a></li>
            </ul>
      </div>
    </aside>
    
    <div class="bloco">
        <h1>Inicio</h1>
    </div>

    <div class="container">
        <div class="destaque">
            <h2>Produtos com estoque baixo</h2>
            <h3></h3>
            <h2>Notas</h2>
        </div>
    </div>

    <div class="container">
        <div class="grafico1">
            <div id="piechart" style="width: 600px; height: 300px"></div> <!--Exibição do gráfico-->
        </div>
    <h3></h3>
        <div class="grafico2">
            <div id="curve_chart" style="width: 600px; height: 300px"></div> <!--Exibição do gráfico-->
        </div>
    </div>
</body>
</html>