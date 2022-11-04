<?php 
    session_start();
    require '../db.php';
    require '../dashboard_parts/header.php';

    $select = "SELECT * FROM banner_images";
    $select_banner = mysqli_query($db_connection, $select);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Banner Image List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Banner_imager</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_banner as $key=>$banner_img){?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><img width="100" src="../uploads/banner/<?=$banner_img['banner_image']?>" alt=""></td>
                            <td><a href="banner_img_status.php?id=<?=$banner_img['id']?>"><span class="badge text-bg-<?=($banner_img['status']==1?'success':'secondary')?>"><?=($banner_img['status']==1?'Active':'Deactive')?></span></a></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="delete_banner_img.php?id=<?=$banner_img['id']?>">Delete</a>
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
                    <h3>Add Banner Image</h3>
                </div>
                <div class="card-body">
                    <form action="banner_image_post.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="file" class="form-control" name="banner_image">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Image</button>
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