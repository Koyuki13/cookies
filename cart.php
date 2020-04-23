<?php require 'inc/head.php'; ?>

<?php if(!isset($_SESSION['user'])):
    header('Location: /index.php'); ?>
<?php endif; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cart'] as $id => $cookie) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $cookie['name']; ?></h3>
                    <p><?= $cookie['description']; ?></p>
                </figcaption>
            </figure>
        </div>
        <?php } ?>
</section>
<?php require 'inc/foot.php'; ?>