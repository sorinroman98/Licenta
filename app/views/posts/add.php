<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT;?>/posts" class="btn btn-light"><i class="fa fa-backward"></i>Back</a>
<div class="card card-body bg-light mt-5">
    <h2>Add Post</h2>
    <p>Create a posts</p>
    <form action="<?php echo URLROOT; ?>/posts/add" method="post" enctype="multipart/form-data">

        <?php if (strcmp(($_SESSION['user_lvl']),"admin") == 0) : ?>
        <div class="form-check">
            <input type="checkbox" name="checkboxAnounce" class="btn-check" id="btn-check-2-outlined" checked autocomplete="off">
            <label class="btn btn-outline-secondary" for="btn-check-2-outlined">Anunt</label><br>
        </div>
    <?php endif ?>

        <div class="form-group">
            <label for="title">Title: <sup>*</sup></label>
            <input type="text" name="title" class="form-control form-control-lg <?php echo
            (!empty($data['title_err'])) ? "is-invalid" : ""; ?>" value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>

        <div class="form-group">
            <label for="body">Body: <sup>*</sup></label>
            <textarea name="body" class="form-control form-control-lg <?php echo
            (!empty($data['body_err'])) ? "is-invalid" : ""; ?>"> <?php echo $data['body']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
        </div>

        <div class="form-group">
            <label for="file">Select Image: </label>
            <input type="file" name="imagePosts" class="form-control form-control-md">
        </div>

        <input type="submit" class="btn btn-success" value="Submit">
    </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
