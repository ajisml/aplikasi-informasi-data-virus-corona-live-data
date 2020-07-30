<?php defined("BASEPATH") or exit("^_^"); ?>
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://instagram.com/ajis.ml" class="nav-link" target="_blank"><i class="fab fa-instagram"></i> @ajis.ml</a>
            </li>
            <li class="nav-item">
              <a href="https://fb.com/me.ajism" class="nav-link" target="_blank"><i class="fab fa-facebook"></i> Ajis Maulana</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
   <!-- Core -->
   <script src="<?=$baseurl.'assets/vendor/jquery/dist/jquery.min.js' ?>"></script>
   <script src="<?=$baseurl.'assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js' ?>"></script>
   <script src="<?=$baseurl.'assets/vendor/js-cookie/js.cookie.js' ?>"></script>
   <script src="<?=$baseurl.'assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js' ?>"></script>
   <script src="<?=$baseurl.'assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js' ?>"></script>
   <!-- Optional JS -->
   <script src="<?=$baseurl.'assets/vendor/onscreen/dist/on-screen.umd.min.js' ?>"></script>
   <script src="<?=$baseurl.'assets/js/all.min.css' ?>"></script>
   <!-- Datatable -->

  <!-- Costume Datatable -->
  <script src="<?=$baseurl;?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=$baseurl;?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?=$baseurl;?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
  <script src="<?=$baseurl;?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
  <script src="<?=$baseurl;?>assets/plugins/datatables/dataTables.select.min.js"></script>
  <script type="text/javascript">$(document).ready(function(){ $('#datatable').DataTable();  var table=$('#datatable-buttons').DataTable({lengthChange: false, buttons: ['copy', 'excel', 'pdf']});  $('#key-table').DataTable({keys: true});  $('#responsive-datatable').DataTable();  $('#selection-datatable').DataTable({select:{style: 'multi'}}); table.buttons().container() .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');}); </script>
 </body>

 </html>