<?php
	require APPROOT.'/views/inc/header.php';
?>
    <div class="row">
        <div class="col-md-6">
            <h1>Posts</h2>
        </div>
        <div class="col-md-6">
            <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary float-right">
                <i class="fas fa-pencil-alt">Add Post</i>
            </a>
        </div>
    </div>
    <?php foreach($data['posts'] as $post) : ?>
        <div class="card card-body mb-3">
            <h4 class="card-title">
                <?php echo $post->title; ?>
            </h4>
            <p>
                <?php echo $post->title; ?>
            </p>
        </div>
    <?php endforeach ?>
<?php
	require APPROOT.'/views/inc/footer.php';
?>