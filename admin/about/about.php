<?php 
    session_start();
    require '../../db.php';

    require '../dashboard_parts/header.php';

    $select = "SELECT * FROM about";
    $select_banner = mysqli_query($db_connection, $select);
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
                            <th>About Me</th>
                      
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_banner as $key=>$banner){ ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$banner['about_you']?></td>
             
                            <td><a href="about_status.php?id=<?=$banner['id']?>"><span class="badge text-bg-<?=($banner['status']==1?'success':'secondary')?>"><?=($banner['status']==1?'Active':'Deactive')?></span></a></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="about_delete.php?id=<?=$banner['id']?>">Delete</a>
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
                    <form action="about_post.php" method="POST">
                   
                        <div class="mb-3">
                

                            <textarea class="form-control"  name="about_you" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Banner</button>
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