<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik dengan Chart.js</title>
    
</head> -->
<div class="content-wrapper">
    <script src="<?php echo base_url() ?>/assets/chart/Chart.js"></script>
    <br>
    <h4 style="text-align:center">Grafik Data Pegawai</h4>
    <a href="<?= base_url("pegawai") ?>" class="btn btn-info"><i aria-hidden="true">Back</i></a>
    <canvas id="myChart" class="Container-fluid" style="width: 100%; max-width: 100%; height: 60vh;"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $nama_alamat = "";
    $jumlah = null;
    foreach ($hasil as $item) {
        $alam = $item->alamat;
        $nama_alamat .= "'$alam'" . ",";
        $alam = $item->total;
        $jumlah .= "'$alam'" . ",";
    }
    ?>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            //The type of chart we want to create
            type: 'pie',
            // The data for our dataset
            data: {
                labels: [<?php echo $nama_alamat; ?>],
                datasets: [{
                    label: 'Data Jurusan Pegawai',
                    backgroundColor: ['rgb(255,99,132)', 'rgba(56,86,255,.87)', 'rgb(60,179,113)', 'rgb(60,238,239),'],
                    borderColor: ['rgb(255,99,132)'],
                    data: [<?php echo $jumlah ?>]
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        })
    </script>
</div>