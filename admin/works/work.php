<?php
session_start();
require '../../db.php';
require '../dashboard_parts/header.php';

$select = "SELECT * FROM works";
$select_work = mysqli_query($db_connection, $select);
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Work List List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Category</th>
                            <th>Sub title</th>
                            <th>Title</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_work as $key=>$work){ ?>

                        <tr>
                        <td><?=$key+1?></td>
                        <td><?=$work['category']?></td>
                        <td><?=$work['sub_title']?></td>
                        <td><?=$work['title']?></td>
                        <td><img width="50" src="../../uploads/works/<?=$work['image']?>" alt=""></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                        </button>
                        
                        <div class="dropdown-menu">
                            <button data-link="delete_work.php?id=<?=$work['id']?>" class="dropdown-item delete_btn" href="">Delete</button>
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
                    <h3>Add Works</h3>
                </div>
                <div class="card-body">
                    <form action="work_post.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" name="category" class="form-control" placeholder="Category Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="sub_title" class="form-control" placeholder="Sub Title">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <textarea name="desp" class="form-control" placeholder="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Works</button>
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
<script>
    $('.delete_btn').click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var link = $(this).attr('data-link');
                window.location.href = link;
            }
        })
    })
</script>

<?php if (isset($_SESSION['delete'])) { ?>
    <script>
        Swal.fire(
            'Deleted!',
            '<?= $_SESSION['delete'] ?>',
            'success'
        )
    </script>
<?php }
unset($_SESSION['delete']) ?>