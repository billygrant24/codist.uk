<?php $this->layout('theme::layouts/master') ?>

<?php $this->start('title') ?>
    <?= $meta['title'] ?>
<?php $this->stop() ?>

<?php $this->start('body') ?>
    <header class="intro-header" style="background-image: url('<?= $themeDir ?>/assets/img/robots.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?= $meta['title'] ?></h1>
                        <hr class="small">
                        <span class="subheading"><?= !isset($meta['summary']) ? '' : $meta['summary'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?= $content ?>
            </div>
        </div>
    </div>
<?php $this->stop() ?>