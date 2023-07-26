  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">
          <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Notifikasi </h2>

          </div>
          <div class="d-xl-flex justify-content-between align-items-start">


          </div>
          <div class="row col-8 align-items-start">
              <form action="<?=BASEURL ?>/Notifications/api" method="POST">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row mb-2 mt-4">
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="nama_wajib_pajak">Nama Wajib Pajak</label>
                              <select id="nama_wajib_pajak" class="form-control input-group"
                                  style="height: 50px; display: flex; align-items: center;">
                                  <option value="" data-to="">Pilih Nama Wajib Pajak</option>
                                  <?php foreach ($data['wajib_pajak_data'] as $item) : ?>
                                  <option value="<?= $item['id_wajib_pajak']; ?>" data-to="<?= $item['no_telp'];?>">
                                      <?= $item['nama_wajib_pajak']; ?>
                                  </option>
                                  <?php endforeach; ?>
                              </select>

                          </div>
                      </div>
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="no_telp">No Telepon</label>
                              <input type="text" id="no_telp" name="no_telp"
                                  class="form-control input-normal" readonly />
                          </div>

                      </div>

                  </div>
                  <div class="form-outline mb-2">
                      <label class="form-label" for="pesan">Pesan</label>
                      <textarea id="pesan" name="pesan" class="form-control input-normal" rows="5"></textarea>
                  </div>
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-secondary btn-lg mt-4 float-end">Kirim</button>
              </form>
          </div>

      </div>



      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->