<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Pegawai
            <small> Control Panel</small>
        </h1>
    </section>

    <section class="content">
        <div class="navbar-form">
            <?php echo $this->session->flashdata('massage'); ?>
            <nav class="navbar navbar-default">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Pegawai</button>
                <a class="btn btn-danger" href="<?php echo base_url('pegawai/print') ?>"><i class="fa fa-print"></i>Print</a>
                <div class="dropdown d-inline">
                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true">
                        <i fa fa-download>Export</i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="<?php echo base_url('pegawai/pdf1') ?>"><i class="fa fa-file"></i>PDF</a></li>
                        <li><a href="<?php echo base_url('pegawai/exportExcel') ?>"><i class="fa fa-file"></i>EXCEL</a></li>
                    </ul>
                </div>
                <a class="btn btn-info" href="<?php echo base_url('pegawai/menampilkan_grafik') ?>"><i class="fas fa-chart-area"></i>Grafik</a>
                <?php echo form_open('pegawai/search') ?>
                <input type="text" name="keyword" class="form" placeholder="Search">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
        </div>
    </section>
    <table class="table">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>NAMA PEGAWAI</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php
        $start++;
        foreach ($pegawai as $pgw) : ?>
            <tr>
                <td><?php echo $start++ ?></td>
                <td><?php echo $pgw->nip ?></td>
                <td><?php echo $pgw->nama ?></td>
                <td><?php echo $pgw->tgl_lahir ?></td>
                <td><?php echo $pgw->alamat ?></td>
                <td><?php echo anchor('pegawai/detail/' . $pgw->no, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="JavaScript:return confirm('Apakah Anda Yakin ?')"><?php echo anchor('pegawai/hapus/' .  $pgw->no, '<div class = "btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('pegawai/rubah/' .  $pgw->no, '<div class = "btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
        <?php endforeach ?>
    </table>

    <?php echo $this->pagination->create_links(); ?>

    <!--Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Data</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <?php echo form_open_multipart('pegawai/aksi_tambah') ?>
                    <div class="form-group">
                        <label> NIP</label>
                        <input type="text" name="nip" class="form-control">
                        <label> NAMA PEGAWAI</label>
                        <input type="text" name="nama" class="form-control">
                        <label> TANGGAL LAHIR</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                        <label> ALAMAT</label>
                        <input type="text" name="alamat" class="form-control">
                        <label> NO TELP</label>
                        <input type="text" name="no_telp" class="form-control">
                    </div>
                    <label> Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>