<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container-fluid bg-light py-3">
<a href="<?php echo URLROOT;?>/posts " class="ms-5 btn btn-light text-white"><i class="fa fa-backward"></i>Back</a>
</div>
<br>
<div class="container bg-light h-100">
<h1 class="pt-4"><?php echo $data['post']->title;?></h1>
<div class="bg-secondary text-white p-2 mb-3">
    Written by <?php echo $data['user']->name;?> on <?php echo $data['post']->created_at;?>
</div>

<div>
    <?php echo $data['post']->body?>
</div>

<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
    <hr>
    <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id;?>" class="btn btn-dark">Edit</a>



    <form class="float-end" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id;?>" method="post">
         <input type="submit" value="Delete" class="btn btn-danger">
    <?php endif;?>

    </form>
</div><?php require APPROOT . '/views/inc/footer-main.php'; ?>