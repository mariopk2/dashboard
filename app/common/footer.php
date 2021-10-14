
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
            <?php
                //Дефинираме секундите
                $time = microtime();
                //Explode на резултата
                $time = explode(" ", $time);
                $time = $time[1] + $time[0];
                $start = $time;
                $time = microtime();
                $time = explode(" ", $time);
                $time = $time[1] + $time[0];
                $finish = $time;
                //Общо време за показване
                $totaltime = ($finish - $start)*1000;
                //Показване на резултата
                printf ("<center style='background : #e6ffff;color : black;font-size : 10px;'>Генериране на страницата за %01.2f секунди</center>", $totaltime);
            ?>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=$software['software_url'];?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?=$software['software_url'];?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=$software['software_url'];?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?=$software['software_url'];?>dist/js/app-style-switcher.js"></script>
    <script src="<?=$software['software_url'];?>dist/js/feather.min.js"></script>
    <script src="<?=$software['software_url'];?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?=$software['software_url'];?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=$software['software_url'];?>dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?=$software['software_url'];?>assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?=$software['software_url'];?>assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?=$software['software_url'];?>assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?=$software['software_url'];?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?=$software['software_url'];?>assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?=$software['software_url'];?>assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=$software['software_url'];?>dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>