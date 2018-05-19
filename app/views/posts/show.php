<?php require APPROOT.'/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light">
	<i class="fas fa-backward"></i>
	Back
	</a>
    <br>
    <h1><?php echo $data['post']->title; ?></h1>
    <div class="bg-secondary text-white p-2 mb-3">
        Written by <?php echo $data['user']->name.' on '.$data['post']->created_at; ?>
    </div>
    <p><?php echo $data['post']->body; ?> </p>
    <?php if($data['post']->user_id == $_SESSION['user_id']): ?>
        <hr>
        <a href="<?php echo URLROOT.'/posts/edit/'.$data['post']->id; ?>" class="btn btn-dark">Edit</a>
    <?php endif; ?>
    <form class="float-right" action="<?php echo URLROOT.'/posts/delete/'.$data['post']->id;?>" method="post">
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>

<?php require APPROOT.'/views/inc/footer.php'; ?>