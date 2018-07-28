<!-- Footer -->
  </center>
    <footer class="py-3 bg-moe-1">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Moe-Manga 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="<?=base_url()?>assets/bootstrap-4.1.1/dist/js/bootstrap.bundle.js"></script>
    <script src="<?=base_url()?>assets/bootstrap-4.1.1/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap-4.1.1/assets/js/vendor/popper.min.js"></script> -->

    <script src="<?= base_url() ?>assets/bookstore/vendor/popper/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/bookstore/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        var body   = $('body').height();
        var windows = $(window).height();
        var footer = $('footer').height() + 48;
        var height        = body < windows ? body + (windows - body - footer) : body; 
        $('footer').offset({top: height});
      });
    </script>

  </body>

</html>
