<!-- WELCOME-->
<section class="welcome p-t-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-4" style="color:aliceblue"><?= $title ?>
                </h1>
                <hr class="line-seprate">
            </div>
        </div>
    </div>
</section>
<!-- END WELCOME-->

<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35" style="color:aliceblue"><?= $class; ?></h3>

                    
                        <div class="table-data__tool">
                        <form action="<?= base_url('testing/excel') ?>" enctype="multipart/form-data" method="post">
                        <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--xl">
                                <label class="col-form-label text-md-left">Upload File</label> 
                                         <div class="mt-1">
                                                <span class="text-secondary">File yang harus diupload : .xls, xlsx</span>
                                            </div>
                                <input type="file" name="upload_file" class="form-control" placeholder="Upload" id="upload_file" required>
                                </div>
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>Import Data</button>
                            </div>
                         </form>
                </div>
              
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead style="color:aliceblue">
                            <tr style="color:aliceblue">
                                <th style="color:aliceblue">No.</th>
                                <th style="color:aliceblue">Nama</th>
                                <th style="color:aliceblue">Kriteria 1</th>
                                <th style="color:aliceblue">Kriteria 2</th>
                                <th style="color:aliceblue">Kriteria 3</th>
                                <th style="color:aliceblue">Kriteria 4</th>
                                <th style="color:aliceblue">Kriteria 5</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($testing as $data) : ?>
                                <tr class="tr-shadow">
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <span class="block-email"><?= $data['nama_penduduk']; ?></span>
                                    </td>
                                    <td>
                                        <span class="block-email"><?= $data['c1']; ?></span>
                                    </td>
                                    <td>
                                        <span class="block-email"><?= $data['c2']; ?></span>
                                    </td>
                                    <td>
                                        <span class="block-email"><?= $data['c3']; ?></span>
                                    </td>
                                    <td>
                                        <span class="block-email"><?= $data['c4']; ?></span>
                                    </td>
                                    <td>
                                        <span class="block-email"><?= $data['c5']; ?></span>
                                    </td>
                                    
                                </tr>
                                <tr class="spacer"></tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->