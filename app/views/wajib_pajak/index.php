  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">
          <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Pengisian Wajib Pajak </h2>

          </div>
          <div class="d-xl-flex justify-content-between align-items-start">


          </div>
          <div class="row col-8 align-items-start">
              <form>
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row mb-2 mt-4">
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="form6Example1">Nama Wajib Pajak</label>
                              <input type="text" id="form6Example1" class="form-control input-normal" />
                          </div>
                      </div>
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="form6Example2">NPWP</label>
                              <input type="text" id="form6Example2" class="form-control input-normal" />
                          </div>
                      </div>
                  </div>

                  <!-- Text input -->
                  <div class="col">
                      <div class="form-outline">
                          <label class="form-label" for="form6Example1">Jenis Pajak</label>
                          <select id="form6Example1" class="form-control input-group"
                              style="height: 50px; display: flex; align-items: center;">
                              <option value="">Pilih Jenis Pajak</option>
                              <option value="Perusahaan A">Pajak Penghasilan (PPh)</option>
                              <option value="Perusahaan B">Pajak Pertambahan Nilai (PPN)</option>
                              <option value="Perusahaan B">Pajak Penjualan atas Barang Mewah (PPnBM)</option>
                              <option value="Perusahaan C">Bea Materai</option>
                              <option value="Perusahaan C">Pajak Bumi dan Bangunan</option>
                          </select>
                      </div>
                  </div>
                  <div class="row mb-2 mt-4">
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="form6Example1">Periode Pembukuan</label>
                              <input type="date" id="form6Example1" class="form-control input-normal" />
                          </div>
                      </div>
                      <div class="col align-items-center mt-5" style=" margin-right: -320px;">
                          <span>s.d.</span>
                      </div>
                      <div class="col">
                          <div class="form-outline " style="margin-top: 30px;">
                              <!-- <label class="form-label" for="form6Example1">Periode Pembukuan</label> -->
                              <input type="date" id="form6Example2" class="form-control input-normal mt-3" />
                          </div>
                      </div>
                  </div>

                  <div class="row mb-2 mt-4">
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="form6Example1">Alamat</label>
                              <div class="input-group">

                                  <textarea id="form6Example3" class="form-control input-normal" rows="5"></textarea>


                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row mb-2 mt-4">
                      
                      <div class="col">
                          <div class="form-outline">
                              <label class="form-label" for="form6Example2">No HP</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">Rp.</span>
                                  </div>
                                  <input type="text" id="form6Example2" class="form-control input-normal" />
                              </div>
                          </div>

                      </div>
                      <div class="col">
                      <div class="form-outline">
                              <label class="form-label" for="form6Example1">Status Wajib Pajak</label>
                              <select id="form6Example1" class="form-control input-group"
                                  style="height: 50px; display: flex; align-items: center;">
                                  <option value="">Pilih Status</option>
                                  <option value="Perusahaan A">Lunas</option>
                              <option value="Perusahaan B">Tertunggak</option>
                              <option value="Perusahaan B">Belum Lunas</option> 
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