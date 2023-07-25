<footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#" target="_blank">kabupatenBone </a>2023</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?=BASEURL;?>/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?=BASEURL;?>/vendors/chart.js/Chart.min.js"></script>
    <script src="<?=BASEURL;?>/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <script src="<?=BASEURL;?>/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=BASEURL;?>/js/off-canvas.js"></script>
    <script src="<?=BASEURL;?>/js/hoverable-collapse.js"></script>
    <script src="<?=BASEURL;?>/js/misc.js"></script>
    <script src="<?=BASEURL;?>/js/data-tables.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?=BASEURL;?>/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    updateFields();
  });
</script>
<script>
function updateFields() {
  const select = document.getElementById("nama_wajib_pajak");
  const selectedOption = select.options[select.selectedIndex];
  const phoneNumber = selectedOption.getAttribute("data-to");
  const optionText = selectedOption.textContent;
  document.getElementById("no_telp").value = phoneNumber;
    // Create an AJAX request to send the 'to' value to the controller
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "<?=BASEURL ?>/Notifications/api", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("to=" + phoneNumber);
}

document.getElementById("nama_wajib_pajak").addEventListener("change", updateFields);
</script>



  </body>
</html>