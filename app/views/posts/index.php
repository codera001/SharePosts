<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message');?>
<div class="container-fluid bg-white">
    <div class="container align-items-center">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h1>Posts</h1>
            </div>
            <div class="col-md-6">
                <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary float-end">
                    <i class="fa fa-pencil text-white" style="color:white">Add Post</i>
                </a>
            </div>

        </div>

        <?php foreach($data['posts'] as $post) :?>
           <div class="card card-body mb-3">
            <h4 class="class-title"><?php echo $post->title;?></h4>
            <div class="bg-light p-2 mb-3">
               Written by <?php echo $post->name;?> on <?php echo $post->postCreated; ?>
            </div>
            <p class="card-text text-dark"><?php echo $post->body;?></p>
            <a href="<?php echo URLROOT;?>/posts/show/<?php echo $post->postId;?>" class="btn btn-dark">More</a>
           </div>
            <?php endforeach; ?>
    </div>
</div>
<div class="bg-light rounded-4 text-dark">
<?php require APPROOT . '/views/inc/footer-main.php'; ?>
</div>
