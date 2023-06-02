    <footer class="d-flex justify-content-center fixed-bottom">
      <p>© <?php echo date("Y") ?> ESL</p>
    </footer>
    
    <script src="<?php echo base_url('public/plugins/bootstrap5.3/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('public/plugins/jquery3.6.4/jquery-3.6.4.min.js') ?>"></script>

    <script>
      $(".input-search > input")
        .on("focus", function () {
          $(".input-search").addClass("active");
        })
        .on("blur", (e) => {
          $(".input-search").removeClass("active");
        });
    </script>
  </body>
</html>