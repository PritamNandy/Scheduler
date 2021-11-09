<!--footer start-->
<footer class="site-footer" style="bottom: 0px !important;">
    <div class="text-center">
        2018 &copy; Scheduler by <b><a href="https://heydev.net">HeyDev</a></b>.
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo site_url('common/js/jquery.js'); ?>"></script>
<script src="<?php echo site_url('common/js/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>

<script class="include" type="text/javascript" src="<?php echo site_url('common/js/jquery.dcjqaccordion.2.7.js'); ?>"></script>
<script src="<?php echo site_url('common/js/jquery.scrollTo.min.js'); ?>"></script>
<script src="<?php echo site_url('common/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
<script src="<?php echo site_url('common/js/jquery.sparkline.js'); ?>" type="text/javascript"></script>
<script src="<?php echo site_url('common/js/jquery.customSelect.min.js'); ?>" ></script>
<script src="<?php echo site_url('common/js/respond.min.js'); ?>" ></script>
<script src="<?php echo site_url('common/assets/tableExport/tableExport.min.js'); ?>" ></script>
 



<!--common script for all pages-->
<script src="<?php echo site_url('common/js/common-scripts.js'); ?>"></script>

<!--script for this page-->

<script src="<?php echo site_url('common/js/count.js'); ?>"></script>
<!-- 
<script src="<?php echo site_url('common/js/slidebars.min.js'); ?>"></script>
<script src="<?php echo site_url('common/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js'); ?>"></script>
<script src="<?php echo site_url('common/js/owl.carousel.js'); ?>" ></script>
<script src="<?php echo site_url('common/js/sparkline-chart.js'); ?>"></script>
<script src="<?php echo site_url('common/js/easy-pie-chart.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/bootstrap-daterangepicker/date.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/jquery-multi-select/js/jquery.quicksearch.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/bootstrap-daterangepicker/moment.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<script>

    //owl carousel

    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

    $(window).on("resize", function () {
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>
-->
<script type="text/javascript" src="<?php echo site_url('common/assets/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>

<script type="text/javascript" src="<?php echo site_url('common/assets/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js'); ?>"></script>

<script type="text/javascript" src="<?php echo site_url('common/assets/colorpicker/js/bootstrap-colorpicker.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/bootstrap-timepicker/js/bootstrap-timepicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('common/assets/jquery-multi-select/js/jquery.multi-select.js'); ?>"></script>


<!--select2-->
<script type="text/javascript" src="<?php echo site_url('common/assets/select2/js/select2.min.js'); ?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!--multiselect start + spinner + wysihtml5 scripts-->
<script src="<?php echo site_url('common/js/advanced-form-components.js'); ?>"></script>
<!--pickers script-->
<script>
    $('.dpYears').datepicker({
        autoclose: true,
    });
    
    function printCSV() {
        $('.table2').tableExport({
            type:'csv'
        });
    }
</script>
<script src="<?php echo site_url('common/js/pickers/init-datetime-picker.js'); ?>"></script>
<script src="<?php echo site_url('common/js/pickers/init-color-picker.js'); ?>"></script>


<script type="text/javascript">

      $(document).ready(function () {
          $(".js-example-basic-single").select2();

          $(".js-example-basic-multiple").select2();
          
          setInterval(function(){
            $(".message").fadeOut(1000);
          }, 5000);
      });
</script>
<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  });
});
</script>
</body>
</html>

