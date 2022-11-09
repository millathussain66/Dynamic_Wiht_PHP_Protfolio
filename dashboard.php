<?php
session_start();
 
require 'session_check.php';
require 'db.php';
require 'admin/dashboard_parts/header.php';
?>
		
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <p>Welcome To Admin Panel  -> <span class="text-black"><strong><?=$after_assoc_user['name']?></strong></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
require 'admin/dashboard_parts/footer.php';
?>