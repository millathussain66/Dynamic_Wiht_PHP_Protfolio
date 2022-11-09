<?php 
session_start();
require '../db.php';

$select_users = "SELECT * FROM users";
$users_all = mysqli_query($db_connection, $select_users);
?>
<?php 
require '../admin/dashboard_parts/header.php';
?>
	

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5 m-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-white">User List</h3>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($users_all as $key=>$user){ ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$user['name']?></td>
                            <td><?=$user['email']?></td>
                            <td><img width="50" src="../uploads/user/<?=$user['image']?>" alt=""></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="delete_user.php?id=<?=$user['id']?>">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
require '../admin/dashboard_parts/footer.php';
?>
	

<?php if(isset($_SESSION['delete'])){ ?>
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '<?=$_SESSION['delete']?>',
        showConfirmButton: false,
        timer: 1500
        })
    </script>
<?php } unset($_SESSION['delete'])?>