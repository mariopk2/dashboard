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
<style>.modal{font-size : 13px;}.modal-footer{margin-top : -20px;}</style>
  <!-- Page wrapper  -->
  
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?=$lang['clients_menu'];?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="<?=$software['software_url_menu'];?>index" class="text-muted"><?=$software['software_name'];?></a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><?=$lang['clients_menu'];?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <a href="" class="btn btn-outline-primary waves-effect waves-light" data-toggle="modal" data-target="#scrollable-modal"><span class="btn-label"><i class="fa fa-puzzle-piece"></i></span> <?=$lang['add'];?></a>
                            <a href="" class="btn btn-outline-primary waves-effect waves-light"><span class="btn-label"><i class="fa fa-download"></i></span> <?=$lang['import'];?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade1" id="scrollable-modal" tabindex="-1" role="dialog" data-backdrop="static"
                aria-labelledby="scrollableModalTitle" aria-hidden="false">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollableModalTitle"><?=$lang['form_add_client'];?></h5>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="clients">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label><?=$lang['add_client_name'];?></label>
                                    <input type="text" class="form-control" name="client_name">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_address'];?></label>
                                    <input type="text" class="form-control" name="client_address">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_eik'];?></label>
                                    <input type="text" class="form-control" name="client_eik">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_dds'];?></label>
                                    <input type="text" class="form-control" value="BG" name="client_vat">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_mol'];?></label>
                                    <input type="text" class="form-control" name="client_mol">
                                </div>
                                <div class="form-group">
                                    <label><?=$lang['add_client_account_manager'];?></label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="client_account_manager">
                                        <option selected><?= $lang['please_Select_'];?></option>
                                        <?php
                                            while($viewAccountManagers = mysqli_Fetch_array($SelectAccountManagers)){
                                        ?>
                                            <option value="<?=$viewAccountManagers['user_id'];?>"><?=$viewAccountManagers['user_firstname'];?> <?=$viewAccountManagers['user_lastname'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=$lang['close'];?></button>
                                <input type="submit" name="add_client" value="<?=$lang['submit'];?>" class="btn btn-primary">
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="container-fluid">
                       <style>#zero_config{font-size : 13px;}</style>
                       
                <div class="row">
                    <div class="col-12" >
                        <div class="card">
                            <div class="card-body" style="overflow-x: hidden;">
                                <h4 class="card-title"><?=$lang['clients_menu'];?></h4>
                                <div class="table-responsive" >
                                    <table id="zero_config" class="table table-striped table-bordered " width="100%">
                                        <thead>
                                            <tr>
                                                
                                                <th><?=$lang['add_client_name'];?></th>
                                                <th><?=$lang['add_client_eik'];?></th>
                                                <th width="15%"><?=$lang['add_client_address'];?></th>
                                                <th width="15%"> <?=$lang['add_client_mol'];?></th>
                                                <th><?=$lang['add_client_account_manager'];?></th>
                                                <th width="14%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                while($viewClients = mysqli_Fetch_array($SelectClients)){
                                            ?>
                                            <tr>
                                               
                                                <td><a href="clients/view/<?=$viewClients['client_id'];?>/" data-toggle="tooltip" data-placement="top" title="<?=$lang['view_client'];?>"><?=$viewClients['client_name'];?></a></td>
                                                <td><?=$viewClients['client_eik'];?></td>
                                                <td><?=$viewClients['client_address'];?></td>
                                                <td><?=$viewClients['client_mol'];?></td>
                                                <td><?=$viewClients['user_firstname'];?> <?=$viewClients['user_lastname'];?></td>
                                                <td>
                                                    <a href="clients/view/<?=$viewClients['client_id'];?>/" data-toggle="tooltip" data-placement="top" title="<?=$lang['view_client'];?>">
                                                        <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                                    </a>
                                                    <a href="clients/edit/<?=$viewClients['client_id'];?>/" data-toggle="tooltip" data-placement="top" title="<?=$lang['edit_client'];?>">
                                                        <button type="button" class="btn btn-sm btn-success"><i class="fa fa-bars"></i></button>
                                                    </a>
                                                    <a href="clients?action=delete&id=<?=$viewClients['client_id'];?>"  data-toggle="tooltip" data-placement="top" title="<?=$lang['delete'];?>">
                                                        <button type="button" class="btn btn-sm btn-danger"  ><i class="fa fa-trash"></i></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ====================================================-->

<?php
    include 'common/footer.php';
?>
<script src="<?=$software['software_url'];?>assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=$software['software_url'];?>dist/js/pages/datatable/datatable-basic.init.js"></script>

   