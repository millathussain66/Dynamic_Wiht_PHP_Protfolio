<?php 
    session_start();
    require '../../db.php';

    require '../dashboard_parts/header.php';



    $select = "SELECT * FROM copy_right";
    $copy_right = mysqli_query($db_connection, $select);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>About Content List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Copy Right</th>
        
                            <th>Action</th>
                        </tr>
                        <?php foreach($copy_right as $key=>$banner){ ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$banner['copy_right_text']?></td>
             
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="delete.php?id=<?=$banner['id']?>">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Banner content</h3>
                </div>
                <div class="card-body">
                    <form action="copy_right_post.php" method="POST">
            
                        <div class="mb-3">
                
                            <input class="form-control"  name="copy_right_text" placeholder="copy_right Text"></input>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add</button>
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