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
    
    

<?php require APPROOT.'/views/inc/footer.php'; ?>