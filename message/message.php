<?php 
session_start();
require '../db.php';
$select = "SELECT * FROM messages";
$message = mysqli_query($db_connection, $select);
?>
<?php require '../admin/dashboard_parts/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Messages List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($message as $key=>$mesg){ ?>
                        <tr style="background-color: <?=($mesg['status'] == 0)?'#ddd':''?>">
                            <td><?=$key+1?></td>
                            <td><?=$mesg['name']?></td>
                            <td><?=$mesg['email']?></td>
                            <td><?=$mesg['message']?></td>
                            <td>
                                <a href="mesg_view.php?id=<?=$mesg['id']?>" class="btn btn-success">View</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require '../admin/dashboard_parts/footer.php'; ?>