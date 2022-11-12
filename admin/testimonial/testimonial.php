<?php
session_start();
require '../../db.php';

require '../dashboard_parts/header.php';

$select = "SELECT * FROM testimonial";
$select_contact = mysqli_query($db_connection, $select);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Contact Informaiton</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Description</th>
                            <th>Name</th>
                            <th>Who</th>

                            <th>status</th>
                            <th>Action</th>
                        </tr>

                        <?php foreach ($select_contact as $key => $contact) { ?>

                            <tr>
                                <td> <?= $key + 1 ?> </td>
                                <td><?= $contact['quotes'] ?></td>
                                <td><?= $contact['name'] ?></td>
                                <td><?= $contact['introduction'] ?></td>

                                <td><a href="content_status.php?id=<?= $contact['id'] ?>"><span class="badge text-bg-<?= ($contact['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($contact['status'] == 1 ? 'Active' : 'Deactive') ?></span></a></td>
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
                                            <a class="dropdown-item" href="delete_text.php?id=<?= $contact['id'] ?>">Delete</a>
                                        </div>
                                    </div>


                                </td>
                            </tr>

                        <?php } ?>


                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Contact Information Add</h3>
                </div>
                <div class="card-body">
                    <form action="testimonial_post.php" method="POST">

                        <!-- 


                     -->

                        <div class="mb-3">
                            <textarea placeholder="HAPPY CUSTOMER QUOTES
" class="form-control" name="quotes" id="" cols="5" rows="5"></textarea>
                        </div>



                        <div class="mb-3">
                            <input class="form-control" type="text" name="name" placeholder="Select City">

                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="introduction" placeholder="Address">

                        </div>


                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Contact</button>
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