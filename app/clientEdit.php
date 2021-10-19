<?php
    include 'common/header.php';
    if($_POST['edit_client']){
        $client_name = $_POST['client_name'];
        $client_address = $_POST['client_address'];
        $client_eik = $_POST['client_eik'];
        $client_vat = $_POST['client_vat'];
        $client_mol = $_POST['client_mol'];
        $client_account_manager = $_POST['client_account_manager'];
        mysqli_query($mysqli,"
        UPDATE `clients` SET
        `client_name` = '$client_name',
        `client_address` = '$client_address',
        `client_eik` = '$client_eik',
        `client_vat` = '$client_vat',
        `client_mol` = '$client_mol',
        `client_account_manager` = '$client_account_manager' 
        WHERE client_id = ".$_GET['id']."
        ");
        echo '<script>'.$lang["notification_edit_client"].'!</script>';
        echo '<script>window.location.href = "../../../clients";</script>';
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?=$lang['viewclient_edit'];?>: <?=$viewClientSelectArray['client_name'];?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="<?=$software['software_url_menu'];?>index" class="text-muted"><?=$software['software_name'];?></a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><?=$lang['viewclient_edit'];?></li>
                                </ol>
                            </nav>
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
                                
                            <form method="POST" action="clients">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label><?=$lang['add_client_name'];?></label>
                                    <input type="text" class="form-control" name="client_name" value="<?=$viewClientSelectArray['client_name'];?>">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_address'];?></label>
                                    <input type="text" class="form-control" name="client_address" value="<?=$viewClientSelectArray['client_address'];?>">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_eik'];?></label>
                                    <input type="text" class="form-control" name="client_eik" value="<?=$viewClientSelectArray['client_eik'];?>">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_dds'];?></label>
                                    <input type="text" class="form-control" name="client_vat" value="<?=$viewClientSelectArray['client_vat'];?>">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_mol'];?></label>
                                    <input type="text" class="form-control" name="client_mol" value="<?=$viewClientSelectArray['client_mol'];?>">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_account_manager'];?></label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="client_account_manager">
                                        <option selected><?= $lang['please_Select_'];?></option>
                                        <?php
                                            while($viewAccountManagers = mysqli_Fetch_array($SelectAccountManagers)){
                                                if($viewAccountManagers['user_id'] == $viewClientSelectArray['client_account_manager']){
                                                    echo '<option value="'.$viewAccountManagers["user_id"].'" selected>'.$viewAccountManagers["user_firstname"].' '.$viewAccountManagers["user_lastname"].'</option>';
                                                }else{
                                                    echo '<option value="'.$viewAccountManagers["user_id"].'">'.$viewAccountManagers["user_firstname"].' '.$viewAccountManagers["user_lastname"].'</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="../../../clients"><button type="button" class="btn btn-secondary" data-dismiss="modal"><?=$lang['close'];?></button></a>
                                <input type="submit" name="edit_client" value="<?=$lang['submit'];?>" class="btn btn-primary">
                            </div>
                        </form>
                                

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

   