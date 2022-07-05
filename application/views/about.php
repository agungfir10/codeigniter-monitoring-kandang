<?php $this->load->view('_partials/header.php'); ?>
<!-- Page Wrapper -->
<div id="wrapper">

    <?php $this->load->view('_partials/sidebar.php'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            <?php $this->load->view('_partials/navbar.php'); ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">CLOSE HOUSE</h1>
                </div>
                <p align="center">
                    <img src="<?= base_url('assets/img/project.jpg'); ?>" alt="" width="40%">
                </p>

                <p>

                    Ayam broiler merupakan salah satu lahan bisnis yang bagusdan menjajikan akan tetapi,di peternakan indonesia terutama pada kandang-kandang yang masih menggunakan ipe kandang terbuka dan masih menggunakan metode manual dalam pemberian pakan, minum dan pengecekan nilai suhu, kelembaan serta penaburan sekam. Untuk menutupi kekurangan tersebut dibuatlah kandang dengan tipe close house serta ketersedian pakan, minumdan sekam serta nilai suhu dan kelembaban yang di monitoring melalui website.
                </p>
                <p>


                    Kandang broiler sistem close house adalah kandang tertututp yang menjamin keamanan secara biologi(kontak dengan organisme lain)dengan pengatur ventilasi yng baik sehingga lebih sedikit stress yang terjadi pada ternak.
                </p>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php $this->load->view('_partials/copyright.php'); ?>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('_partials/footer.php'); ?>