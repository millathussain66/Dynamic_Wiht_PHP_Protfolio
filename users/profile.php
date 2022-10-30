<?php
session_start();
 
require '../session_check.php';
require '../db.php';
require '../dashboard_parts/header.php';

	$id = $_SESSION['id'];
	$user = "SELECT * FROM users WHERE id=$id";
	$user_result = mysqli_query($db_connection, $user);
	$after_assoc_user = mysqli_fetch_assoc($user_result);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Update Profile</h3>
                </div>
                <div class="card-body">
                    <form action="profile_info_update.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="hidden" name="id" class="form-control" value="<?=$after_assoc_user['id']?>">
                            <input type="text" name="name" class="form-control" value="<?=$after_assoc_user['name']?>">
                        </div>
                        <div class="mb-3">
                             <label for="" class="form-label">Old Password</label>
                            <input type="password" name="old_password" class="form-control">
                            <?php if(isset($_SESSION['wrong'])){ ?>
                                <strong class="text-danger"><?=$_SESSION['wrong']?></strong>
                            <?php } unset($_SESSION['wrong'])?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">New Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Update Profile Image</h3>
                </div>
                <div class="card-body">
                    <form action="profile_image_update.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="hidden" name="id" class="form-control" value="<?=$after_assoc_user['id']?>">
                            <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <br>
                            <img id="blah" width="200" src="/Brim/uploads/user/<?=$after_assoc_user['image']?>" alt="">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
require '../dashboard_parts/footer.php';
?>