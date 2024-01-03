<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Rekam Medis</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <!-- Table -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">
                                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                                    </p>
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>No. Rekam Medis</th>
                                                <th>No. Kwitansi</th>
                                                <th>Nama Pasien</th>
                                                <th>No. KTP</th>
                                                <th>No. HP</th>
                                                <th>No. Umur</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Layanan </th>
                                                <th>Dokter Pemeriksa </th>
                                                <th>Tanggal Kontrol </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $id = 1;

                                            foreach ($allRekamMedis as $data) :  ?>
                                                <tr>
                                                    <td><?= $id++; ?> </td>
                                                    <td><?= $data['no_rekammedis']; ?></td>
                                                    <td><?= $data['no_kwitansi']; ?></td>
                                                    <td><?= $data['nama_pasien']; ?></td>
                                                    <td><?= $data['no_ktp']; ?></td>
                                                    <td><?= $data['no_hp']; ?></td>
                                                    <td></td>
                                                    <td><?= $data['jenis_kelamin']; ?></td>
                                                    <td><?= $data['title_layanan']; ?></td>
                                                    <td><?= $data['nama']; ?></td>
                                                    <td><?= date('d M Y', strtotime($data['tgl_kontrol']));  ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- End Table -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>