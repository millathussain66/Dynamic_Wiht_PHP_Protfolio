<?php 
    session_start();
    require '../../db.php';
    require '../dashboard_parts/header.php';

    $select_customer_slider = "SELECT * FROM customer_slider";
    $select_customer_slider_query = mysqli_query($db_connection, $select_customer_slider);
?>


<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Customar Slider List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Logo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_customer_slider_query as $key=>$logo){ ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><img width="100" src="../../uploads/customer_slider/<?=$logo['logo_image']?>" alt=""></td>
                            <td><a href="slider_status.php?id=<?=$logo['id']?>"><span class="badge text-bg-<?=($logo['status']==1?'success':'secondary')?>"><?=($logo['status']==1?'Active':'Deactive')?></span></a></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="delete_slider_image.php?id=<?=$logo['id']?>">Delete</a>
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
                    <h3>Add Customar Slider </h3>
                </div>
                <div class="card-body">
                    <form action="slider_post.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="file" name="logo_image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <br>
                            <img id="blah" width="200" src="" alt="">
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