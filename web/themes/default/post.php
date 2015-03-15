<?php $this->layout('theme::layouts/master') ?>

<?php $this->start('title') ?><?= $meta['title'] ?><?php $this->stop() ?>

<?php $this->start('body') ?>
    <header class="intro-header" style="background-image: url('<?= $themeDir ?>/assets/img/<?= $meta['cover'] ? $meta['cover'] :
        'robots.png' ?>'); background-size: 100%; background-position: center;)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?= $meta['title'] ?></h1>
                        <h2 class="subheading"><?= !isset($meta['summary']) ? '' : $meta['summary'] ?></h2>
                        <span class="meta">Posted by <a href="#"><?= $meta['author'] ?></a> on <?= $meta['published'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?= $content ?>
            </div>
        </div>
    </div>
<?php $this->stop() ?>