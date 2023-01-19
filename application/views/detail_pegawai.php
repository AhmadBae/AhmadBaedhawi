<div class="content-wrapper">
        <section class="content">
            <h4><strong>DETAIL DATA PEGAWAI</strong></h4>
            <table class="table">
                <tr>
                    <th>NIP</th>
                    <td><?php echo $detail->nip?></td>
                </tr>
                <tr>
                    <th>NAMA</th>
                    <td><?php echo $detail->nama?></td>
                </tr>
                <tr>
                    <th>TANGGAL LAHIR</th>
                    <td><?php echo $detail->tgl_lahir?></td>
                </tr>
                <tr>
                    <th>ALAMAT</th>
                    <td><?php echo $detail->alamat?></td>
                </tr>
                <tr>
                    <th>NO TELP</th>
                    <td><?php echo $detail->no_telp?></td>
                </tr>
                <tr>
                    <th>FOTO</th>
                    <td>
                        <img src="<?php echo base_url() ?>assets/foto/<?php echo $detail->foto; ?>" witdh="90" height="110">
                    </td>
                </tr>
            </table>
            <a href="<?php echo base_url('pegawai/index'); ?>" class="btn btn-primary">Back</a>
        </section>
    </div>
