<?php require APPROOT .'/views/inc/header.php';?>

<div class="container text-center align-items-center">
        <h1 class="display-2">
            <?php echo $data['title']; ?>
        </h1>
        <p class="lead text-white-50">
            <?php echo $data['description']; ?>
        </p>
        <p>Version: <strong><?php echo APPVERSION ;?></strong></p>
    </div>
<?php require APPROOT .'/views/inc/footer-main.php';?>

 