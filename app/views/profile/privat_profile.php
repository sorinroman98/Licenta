<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-3"> <?php if (isset($data)) {
               echo "Info";
            } ?> </h1>
        <p class="lead"> <?php echo $data['Description']; ?>  </p>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
