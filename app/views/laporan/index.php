<div class="main-panel">
      <div class="content-wrapper " >
          <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-5"> Laporan Wajib Pajak </h2>
          </div>
          <div class="d-xl-flex justify-content-between align-items-start ">
          </div>
          <div class="row col-12 align-items-start" style="overflow-x: auto;">
          <table class="table table-striped" id="wajibPajakData" style="width: 100%">
                    <thead>
                    <tr>
                            <th scope="col">ID Wajib Pajak</th>
                            <th scope="col">Nama Wajib Pajak</th>
                            <th scope="col">NPWP</th>
                            <th scope="col">Jenis Pajak</th>
                            <th scope="col">Mulai Periode</th>
                            <th scope="col">Berakhir Periode</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Status</th>
                            <th scope="col">Update Terakhir</th>
                            <th scope="col">Tindakan</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                  
                    foreach( $data['wajib_pajak'] as $index => $wajibpajak): ?>
                        <tr>
                            <td><?= $wajibpajak['id_wajib_pajak']?></td>
                            <td><?= $wajibpajak['nama_wajib_pajak']?></td>
                            <td><?= $wajibpajak['npwp']?></td>
                            <td><?= $wajibpajak['jenis_pajak']?></td>
                            <td><?= $wajibpajak['mulai_periode']?></td>
                            <td><?= $wajibpajak['berakhir_periode']?></td>
                            <td><?= $wajibpajak['alamat']?></td>
                            <td><?= $wajibpajak['no_telp']?></td>
                            <td><?= $wajibpajak['status']?></td>
                            <td><?= $wajibpajak['update_at']?></td>
                            <td>
                                <div class="row">
                                    <div class="col sm-6 mb-2">
                                        <button class="btn-secondary" data-toggle="modal"
                                            data-target="#actionModal-<?=$index?>">
                                            <img src="<?=BASEURL ?>/images/edit-icon.png" alt=""
                                                style="width: 20px; height: 20px;">
                                        </button>
                                        
                                    </div>
                                    <div class="col sm-6">
                                    <button class="btn-secondary" data-toggle="modal"
                                            data-target="#historyModal-<?=$index?>">
                                            <img src="<?=BASEURL ?>/images/delete-icon.png" alt=""
                                                style="width: 20px; height: 20px;">
                                        </button>   
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
          </div>
      </div>