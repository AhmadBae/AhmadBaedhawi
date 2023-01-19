<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <style>
        .title{
            text-align: center;
        }
            table{
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            table td, 
            table th{
                text-align: center;
                border: 1px solid black;
                padding: 8px;

            }

            table tr:nth-child(even)
            {background-color: #9798c2;}
            table tr:hover 
            {background-color: #03fc62};
            table th{
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: red;
                color: blue ;
            }

        </style>
</head>

<body>
    <button><a href="<?php echo base_url('pegawai/index'); ?>" class="btn btn-primary">Back</a></button>
    <div class="title"><h1>Data Pegawai</h1>
    </div>
        <table class="table">
        <tr>
            <th>NO</th>
            <th>NIP</th>
            <th>NAMA PEGAWAI</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>NO TELP</th>
            <th>FOTO</th>
        </tr>
        <?php
        $no = 1;
        foreach ($pegawai as $pgw) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pgw->nip ?></td>
                <td><?php echo $pgw->nama ?></td>
                <td><?php echo $pgw->tgl_lahir ?></td>
                <td><?php echo $pgw->alamat ?></td>
                <td><?php echo $pgw->no_telp ?></td>
                <td><img src="<?php echo base_url() ?>assets/foto/<?php echo $pgw->foto; ?>" witdh="90" height="110"></td>
            </tr>
        <?php endforeach ?>
        </table>
        <script type="text/javascript">
            window.print();
        </script>
</body>
</html>