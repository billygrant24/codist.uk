<?php $this->layout('theme::layouts/master') ?>

<?php $this->start('title') ?>
    Uh-oh
<?php $this->stop() ?>

<?php $this->start('body') ?>
    <header class="intro-header" style="background-image: url('<?= $themeDir ?>/assets/img/robots.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Uh-oh…</h1>
                        <hr class="small">
                        <span class="subheading">I couldn't find the page you were looking for.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php $post = $this->query()->where('_type', 'post')->sortByDesc('published')->first() ?>
                <p>
                    If you still can't find what you're looking for, why not read my latest blog post: "<a href="/<?= $post['id'] ?>"><?= $post['title'] ?></a>" from <?= $post['published'] ?>.
                </p>
            </div>
        </div>
    </div>
<?php $this->stop() ?>