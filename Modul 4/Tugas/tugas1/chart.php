<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

#container {
    height: 500px;
}

.highcharts-figure, .highcharts-data-table table {
    min-width: 350px;
    max-width: 800px;
    margin: 1em auto;
}

#datatable {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
#datatable caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
#datatable th {
	font-weight: 600;
    padding: 0.5em;
}
#datatable td, #datatable th, #datatable caption {
    padding: 0.5em;
}
#datatable thead tr, #datatable tr:nth-child(even) {
    background: #f8f8f8;
}
#datatable tr:hover {
    background: #f1f7ff;
}
</style>
</head>
<body>
  <div class="container">
                <a class="navbar-brand" href="index.php">Menu Utama</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
  </div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
      Ini adalah hasil survei dari tabel Pelanggan.
    </p>
    <table id="datatable">
                    
                    <thead>
                      <tr>
                        <th>Jenis</th>
                        <th>Hasil</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       require 'koneksi.php';
                                          $view = $koneksi -> query("SELECT kategori, COUNT(*) as hasil FROM `t_pelanggan` GROUP by kategori");
                                          while($row=$view->fetch_array()){

                                            ?> 
                  <tr>
                                  <td><?php echo $row['kategori']; ?></td>  
                                  <td><?php echo $row['hasil']; ?></td>                                                      
                      
</tr>						
                                          <?php }?>
                     </tbody>
                  </table>
  
</figure>
<script>
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data diambil dari Tabel HTML.'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
</script>
</body>
</html>