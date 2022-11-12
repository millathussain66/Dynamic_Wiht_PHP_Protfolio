<?php
session_start();
require '../../db.php';
require '../dashboard_parts/header.php';

$select = "SELECT * FROM service";
$select_service = mysqli_query($db_connection, $select);


?>

<div class="container-fluid">
    <div class="row">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Services List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Service Logo</th>
                            <th>Service Title</th>
                            <th>Service Description</th>
                            <th>Action</th>
                        </tr>

                        <?php foreach ($select_service as $key => $service) { ?>
                            <tr>
                                <td><?php echo $key + 1  ?></td>
                                <td>
                                    <img width="80" src="../../uploads/service/<?php echo $service['service_logo'] ?>" alt="">
                                </td>

                                <td><?php echo $service['service_title'] ?></td>
                                <td><?php echo $service['service_dscp'] ?></td>
                                <td>

                                    <div class="dropdown">
                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <button data-link="service_delete.php?id=<?= $service['id'] ?>" class="dropdown-item delete_btn" href="">Delete</button>
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


                    <form action="service_post.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" name="service_title" class="form-control" placeholder="title">
                        </div>


                        <div class="mb-3">
                            <textarea name="service_dscp" class="form-control" placeholder="description" cols="30" rows="10"></textarea>
                        </div>


                        <div class="mb-3">
                            <input type="file" name="service_logo" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Service</button>
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