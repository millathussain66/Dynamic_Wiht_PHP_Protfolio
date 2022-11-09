<?php 
    session_start();
    require '../../db.php';
    require '../dashboard_parts/header.php';

    $select = "SELECT * FROM socials";
    $select_social = mysqli_query($db_connection, $select);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Logo List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Logo</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($select_social as $sl=>$icon){ ?>
                        <tr>
                            <td><?=$sl+1?></td>
                            <td><i style="font-family:fontawesome" class="<?=$icon['icon']?>"></i></td>
                            <td><a target="_blank" href="<?=$icon['link']?>">Link</a></td>
                            <td>
                                <a href="icon_status.php?id=<?=$icon['id']?>"><span class="badge text-bg-<?=($icon['status']==1?'success':'secondary')?>"><?=($icon['status']==1?'Active':'Deactive')?></span></a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger">Del</a>
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
                    <h3>Add Icon</h3>
                </div>
                <?php 
                    $fonts = array (
                        'fa-apple',
                        'fa-facebook',
                        'fa-facebook-f',
                        'fa-twitch',
                        'fa-twitter',
                        'fa-twitter-square',
                        'fa-instagram',
                        'fa-pinterest',
                        'fa-pinterest-p',
                        'fa-pinterest-square',
                        'fa-linkedin',
                        'fa-linkedin-square',
                        'fa-youtube',
                        'fa-youtube-play',
                        'fa-youtube-square',
                    );
                ?>
                <div class="card-body">
                    <form action="social_post.php" method="POST">
                        <div class="mb-3">
                            <?php foreach($fonts as $icon){ ?>
                                <i data-icon="<?=$icon?>" style="font-family: fontawesome;font-size:30px;margin-right:5px;font-style:none" class="<?=$icon?> icon_class"></i>
                            <?php } ?>  
                            
                            <input type="text" readonly name="icon" id="icon" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="link" class="form-control" placeholder="link">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Icon</button>
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
    $('.icon_class').click(function(){
        var icon_class = $(this).attr('data-icon');
        $('#icon').attr('value', icon_class);
    })
</script>
<?php if(isset($_SESSION['limit'])){ ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?=$_SESSION['limit']?>',
            })
    </script>
<?php } unset($_SESSION['limit'])?>