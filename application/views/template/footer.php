<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    All Rights Reserved by Adminmart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Page -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/popper.js/dist/umd/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/chart.js/dist/Chart.min.js') ?>"></script>

<!-- apps -->
<script src="<?= base_url('dist/js/app-style-switcher.js') ?>"></script>
<script src="<?= base_url('dist/js/feather.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') ?>"></script>
<script src="<?= base_url('dist/js/sidebarmenu.js') ?>"></script>

<!--Custom JavaScript -->
<script src="<?= base_url('dist/js/custom.min.js') ?>"></script>
<script src="<?= base_url('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('dist/js/pages/datatable/datatable-basic.init.js') ?>"></script>
<script src="<?= base_url('dist/highlights/highlight.min.js') ?>"></script>

<script>
    new Chart(document.getElementById("radar-chart"), {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei"],
            datasets: [{
                label: "Hadir",
                fill: true,
                backgroundColor: "blue",
                // borderColor: "rgba(116, 96, 238,1)",
                pointBorderColor: "#fff",
                pointBackgroundColor: "rgba(116, 96, 238,1)",
                data: [8.77, 55.61, 21.69, 6.62, 6.82]
            }, {
                label: "Alfa",
                fill: true,
                backgroundColor: "red",
                borderColor: "red",
                pointBorderColor: "#fff",
                pointBackgroundColor: "red",
                pointBorderColor: "#fff",
                data: [25.48, 54.16, 7.61, 8.06, 4.45]
            }, {
                label: "Izin",
                fill: true,
                backgroundColor: "yellow",
                borderColor: "yellow",
                pointBorderColor: "#fff",
                pointBackgroundColor: "yellow",
                pointBorderColor: "#fff",
                data: [25.48, 54.16, 7.61, 8.06, 4.45]
            }, {
                label: "Sakit",
                fill: true,
                backgroundColor: "green",
                borderColor: "green",
                pointBorderColor: "#fff",
                pointBackgroundColor: "green",
                pointBorderColor: "#fff",
                data: [25.48, 54.16, 7.61, 8.06, 4.45]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Persentase Kehadiran'
            }
        }
    });
</script>
<!-- End JS -->
</body>

</html>