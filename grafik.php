<!DOCTYPE html>

<html lang="en">

<head>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/highcharts.js"></script>

    <script type="text/javascript">
        $(function() {
            var chart;
            $(document).ready(function() {
                chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'container',
                        type: 'column',
                        marginRight: 130,
                        marginBottom: 25
                    },
                    title: {
                        text: 'Grafik Permohonan Bibit ',
                        x: -20 //center
                    },

                    xAxis: {
                        categories: ['Alpukat', 'Cempedak/Nangka', 'Durian', 'Jengkol', 'Langsat',
                            'Matoa', 'Petai', 'Rambutan', 'Sirsak', 'Angsana', 'Kemiri', 'Mahoni',
                            'Ramania', 'Ketapang Kencana', 'Sengon'
                        ]
                    },
                    yAxis: {
                        title: {
                            text: 'distribusi Bibit'
                        },
                        plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                    },
                    tooltip: {
                        formatter: function() {
                            return '<b>' + this.series.name + '</b><br/>' +
                                this.x + ': ' + this.y;
                        }
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'top',
                        x: -10,
                        y: 100,
                        borderWidth: 0
                    },
                    series: [{
                        name: 'Jumlah Total',
                        data: [1660, 1946, 2271, 2590, 3004, 3550, 3550, 3550, 3765, 3550, 3550, 3550, 3550, 3550, 3550]
                    }]
                });
            });

        });
    </script>
</head>

<body>

    <a href="laporangrafik.php" target="_blank" class="btn btn-success mb-4">Cetak gambar grafik </a>
    </td>


    <div id="container" style="min-width: 400px; 
height: 400px; margin: 0 auto"></div>

</body>

</html>