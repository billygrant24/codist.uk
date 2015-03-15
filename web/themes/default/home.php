<?php $this->layout('theme::layouts/master') ?>

<?php $this->start('title'); echo $meta['title']; $this->stop(); ?>

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
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php $posts = $this->query()->where('_type', 'post')->sortByDesc('published') ?>
                <?php foreach ($posts->paginate(2) as $post): ?>
                    <div class="post-preview">
                        <a href="/<?= $post['id'] ?>">
                            <h2 class="post-title"><?= $post['title']?></h2>
                            <h3 class="post-subtitle"><?= !isset($post['summary']) ? '' : $post['summary'] ?></h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#"><?= $post['author'] ?></a> on September 24, 2014</p>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <?php /* ?>
                <?php $pager = $this->pager($posts) ?>
                <ul class="pager">
                    <?php if ($pager->hasPrevious()): ?>
                        <li class="previous">
                            <a href="<?= $baseUrl ?>?page=<?= $pager->getPreviousPage() ?>">&larr; Newer Posts</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($pager->hasNext()): ?>
                        <li class="next">
                            <a href="<?= $baseUrl ?>?page=<?= $pager->getNextPage() ?>">Older Posts &rarr;</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <?php */ ?>
            </div>
        </div>
    </div>
<?php $this->stop() ?>