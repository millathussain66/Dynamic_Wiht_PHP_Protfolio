<?php
session_start();
require '../../db.php';

require '../dashboard_parts/header.php';

$select = "SELECT * FROM contact";
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
                            <th>City</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Emile</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>

                        <?php foreach($select_contact as $key=>$contact){?>

                            <tr>
                                <td> <?= $key+1 ?> </td>
                                <td><?= $contact['contact_desp'] ?></td>
                                <td><?= $contact['contact_city'] ?></td>
                                <td><?= $contact['contact_address'] ?></td>
                                <td><?= $contact['phone'] ?></td>
                                <td><?= $contact['e_mail'] ?></td>

                                <td><a href="contact_status.php?id=<?=$contact['id']?>"><span class="badge text-bg-<?=($contact['status']==1?'success':'secondary')?>"><?=($contact['status']==1?'Active':'Deactive')?></span></a></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="delete_contact.php?id=<?=$contact['id']?>">Delete</a>
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
                    <form action="contact_post.php" method="POST">

                   	

                        <div class="mb-3">
                            <textarea placeholder=" Descriptions" class="form-control" name="contact_desp" id="" cols="5" rows="5" ></textarea>
                        </div>

                        <div class="mb-3">
                        <input class="form-control" type="text" name="contact_city" placeholder="Select City">

                        </div>
                        <div class="mb-3">
                        <input class="form-control" type="text" name="contact_address" placeholder="Address">

                        </div>
                        <div class="mb-3">
                        <input class="form-control" type="text" name="phone" placeholder="Phone Number">

                        </div>
                        <div class="mb-3">
                        <input class="form-control" type="text" name="e_mail" placeholder="Your Email Address">

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