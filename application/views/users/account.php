<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <h2>User Account</h2>
    <h3>Welcome <?php echo $user['display_name']; ?>!</h3>
    <div class="account-info">
        <p><b>Name: </b><?php echo $user['display_name']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>User ID: </b><?php echo $user['user_id']; ?></p>
    </div>
</div>
</body>
</html>