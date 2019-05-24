 <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>public/template_user/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>public/template_user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url();?>public/template_user/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>public/template_user/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url();?>public/template_user/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url();?>public/template_user/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url();?>public/template_user/js/freelancer.min.js"></script>

   <?php 
      if (isset($scripts)) {
        foreach ($scripts as $script_nome) {
          $src = base_url() . "public/template_user/js/" .$script_nome; ?>
          <script src="<?= $src?>"></script>
       <?php 
         }
      }

   ?>

</body>

</html>