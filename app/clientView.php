<?php
    include 'common/header.php';
    if($_POST['add_client']){
        $client_name = $_POST['client_name'];
        $client_address = $_POST['client_address'];
        $client_eik = $_POST['client_eik'];
        $client_vat = $_POST['client_vat'];
        $client_mol = $_POST['client_mol'];
        $client_account_manager = $_POST['client_account_manager'];
        mysqli_query($mysqli,"INSERT INTO clients(`client_name`,`client_address`,`client_eik`,`client_vat`,`client_mol`,`client_account_manager`)VALUES('$client_name','$client_address','$client_eik','$client_vat','$client_mol','$client_account_manager')");
        echo '<script>'.$lang["notification_add_client"].'!</script>';
        echo '<script>window.location.href = "clients";</script>';
    }
    if($_GET['action'] == 'delete'){
        mysqli_query($mysqli,"UPDATE `clients` SET client_deleted = '1' WHERE client_id = ".$_GET['id']."");
        echo '<script>'.$lang["notification_remove_client"].'!</script>';
        echo '<script>window.location.href = "clients";</script>';
    }
?>
  <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Преглед на клиент: <?=$viewClientSelectArray['client_name'];?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="<?=$software['software_url_menu'];?>index" class="text-muted"><?=$software['software_name'];?></a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><?=$lang['viewclient_view'];?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item ">
                                        <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Основни данни</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Контактни лица</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Проекти</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Фактури</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Плащания</span>
                                        </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Бележки</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Файлове</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Рззходи</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="home">
                                        <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile">
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                                            eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum
                                            semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                            eu, consequat vitae, eleifend ac, enim.</p>
                                        <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer adipiscing elit.
                                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                            et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                    </div>
                                    <div class="tab-pane" id="settings">
                                        <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    
                </div>
                <!-- end row-->

                


               

                
              
                <!-- end row-->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

<?php
    include 'common/footer.php';
?>
<script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>

   