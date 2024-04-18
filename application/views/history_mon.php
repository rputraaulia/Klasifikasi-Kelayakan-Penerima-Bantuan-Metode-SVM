
<section class="welcome p-t-10">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color:aliceblue" class="title-4"><?= $title ?>
                </h1>
                <hr class="line-seprate">
            </div>
        </div>
    </div>
	</section>
<?php $data_class = $this->db->query('SELECT * FROM `hasil_klasifikasi` WHERE `nilai`=1 ORDER BY `hasil_klasifikasi`.`tanggal` DESC')->result_array(); ?>

<div id="map" style="width: 1200px; height: 600px"></div>

<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
		<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Kode Penduduk</th>
					<th>Status</th>
				    <th>Tanggal</th>
				</tr>
			</thead>


			<tbody>
            <?php $no = 1;
             foreach ($data_class as $data) : ?>
            <tr>
            <td style="color:aliceblue"><?= $data['kode']; ?> </td>
             <td style="color:aliceblue">Penerima Bansos</td>      
             <td style="color:aliceblue"><?= $data['tanggal']; ?></td>
              
            </tr>
            <div class="marker" data-lat="<?= $data['lat']; ?>" data-lng="<?= $data['lng']; ?>"></div>
              <?php endforeach; ?>
				
			</tbody>
		</table>
	</div>
	</div>
            </div>
        </div>
    </div>
</section>
