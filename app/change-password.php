<?php
    include 'common/header.php';
    if($_POST['change_password']){
        $current_password = hash('sha256', $_POST['current_password']);
        $new_password = $_POST['new_password'];
        $cnew__password = $_POST['cnew__password'];
        $newPasswordHash = hash('sha256', $new_password);
        $SelectCurrentPassword = mysqli_query($mysqli,"SELECT * FROM users WHERE user_password = '".$current_password."'");
        $viewCurrentPassword = mysqli_num_rows($SelectCurrentPassword);
        if($viewCurrentPassword > 0){
            if($new_password != $cnew__password){
                echo "<script>alert('Паролите не съвпадат!');</script>";
            }else{
                mysqli_query($mysqli,"UPDATE users SET user_password = '".$newPasswordHash."' WHERE user_id = ".$_SESSION['user_id']."");
                echo "<script>alert('Успешна промяна на парола!');</script>";
                echo '<script>window.location.href = "sign-out";</script>';
            }
        }else{
            echo "<script>alert('Текущата парола е грешна!');</script>";
        }
    }
?>
  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?=$lang['change_password'];?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted"><?=$software['software_company'];?></a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><?=$lang['change_password'];?></li>
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
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle"><?=$lang['all_fields_required'];?></h6>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label><?=$lang['change_password_current_password'];?></label>
                                        <input type="text" class="form-control" name="current_password">
                                    </div>
                                    <div class="form-group">
                                        <label><?=$lang['change_password_new_password'];?></label>
                                        <input type="text" class="form-control" name="new_password">
                                    </div>
                                    <div class="form-group">
                                        <label><?=$lang['change_password_repea_new_password'];?></label>
                                        <input type="text" class="form-control" name="cnew__password">
                                    </div>
                                    <div class="form-group">
                                       <input type="submit" name="change_password" value="<?=$lang['submit'];?>" class="btn btn-block btn-xs btn-info">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
<?php
    include 'common/footer.php';
?>