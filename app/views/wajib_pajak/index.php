  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">
          <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Pengisian Wajib Pajak </h2>
          </div>
          <div class="d-xl-flex justify-content-between align-items-start">
          </div>
          <div class="row col-8 align-items-start">
              <form method="POST" action="<?=BASEURL ?>/WajibPajak/submitWajibPajak">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row mb-2 mt-4">
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="nama_wajib_pajak">Nama Wajib Pajak</label>
                              <input type="text" id="nama_wajib_pajak" name="nama_wajib_pajak" class="form-control input-normal" />
                          </div>
                      </div>
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="npwp">NPWP</label>
                              <input type="text" id="npwp" name="npwp" class="form-control input-normal" />
                          </div>
                      </div>
                  </div>

                  <!-- Text input -->
                  <div class="col">
                      <div class="form-outline">
                          <label class="form-label" for="jenis_pajak">Jenis Pajak</label>
                          <select id="jenis_pajak" name="jenis_pajak" class="form-control input-group"
                              style="height: 50px; display: flex; align-items: center;">
                              <option value="">Pilih Jenis Pajak</option>
                              <option value="4001">Pajak Penghasilan (PPh)</option>
                              <option value="4002">Pajak Pertambahan Nilai (PPN)</option>
                              <option value="4003">Pajak Penjualan atas Barang Mewah (PPnBM)</option>
                              <option value="4004">Bea Materai</option>
                              <option value="4005">Pajak Bumi dan Bangunan</option>
                          </select>
                      </div>
                  </div>
                  <div class="row mb-2 mt-4">
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="mulai_periode">Periode Pembukuan</label>
                              <input type="date" id="mulai_periode" name="mulai_periode"
                                  class="form-control input-normal" />
                          </div>
                      </div>
                      <div class="col align-items-center mt-5" style=" margin-right: -320px;">
                          <span>s.d.</span>
                      </div>
                      <div class="col">
                          <div class="form-outline" style="margin-top: 30px;">
                              <input type="date" id="berakhir_periode" name="berakhir_periode"
                                  class="form-control input-normal mt-3" />
                          </div>
                      </div>
                  </div>

                  <div class="row mb-2 mt-4">
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="alamat">Alamat</label>
                              <div class="input-group">
                                  <textarea id="alamat" name="alamat" class="form-control input-normal"
                                      rows="5"></textarea>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row mb-2 mt-4">

                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="no_telp">No HP</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">+62</span>
                                  </div>
                                  <input type="text" id="no_telp" name="no_telp" class="form-control input-normal" />
                              </div>
                          </div>

                      </div>
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="status">Status Wajib Pajak</label>
                              <select id="status" name="status" class="form-control input-group"
                                  style="height: 50px; display: flex; align-items: center;">
                                  <option value="">Pilih Status</option>
                                  <option value="3001">Lunas</option>
                                  <option value="3002">Tertunggak</option>
                                  <option value="3003">Belum Lunas</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-secondary btn-lg mt-4 float-end">Simpan</button>
              </form>
          </div>

      </div>


      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->