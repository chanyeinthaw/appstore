<?php render('master.head', compact('title', 'subtitle')) ?>

<?php render('master.sidebar', compact('title', 'categories', 'categoryGames', 'wishlistCount')) ?>
<?php render('master.navbar', compact('notifications','selectHome', 'selectNewReleases', 'currentPage')) ?>

<div class="contents">
    <div class="container">
    <?php if (session('user')['type'] > 1): ?>
        <ul class="nav nav-pills">
            <li class="active"><a href=<?= url('myapps') ?>>Purchased</a></li>
            <li><a href=<?= url('myapps/published') ?>>Published</a></li>
            <li><a href=<?= url('myapps/statistics') ?>>Statistics</a></li>
            <li><a href=<?= url('myapps/inappropirate') ?>>Inappropirate Apps</a></li>
            <li><a href=<?= url('myapps/publish') ?>>Publish</a></li>
        </ul>
        <hr>
    <?php endif; ?>
        <div class="panel panel-default unround app-feed-panel">
            <div class="panel-body">
            <?php foreach ($apps as $key => $value): ?>
                <div class="app-card">
                    <a href=<?=url('app/'.$value['id'])?>>
                        <img src=<?= assets('assets/images/app-icons/' . $value['icon']) ?> alt="..." class="img-thumbnail unround">
                    </a>
                    <p><a class="app-card-link" href=<?=url('app/'.$value['id'])?>><?=$value['name'] ?></a></p>
                    <div>
                        <div>
                        <?php for ($i=0; $i < $value['stars']; $i++): ?>
                            <i class="glyphicon glyphicon-star"></i>
                        <?php endfor; ?>
                        <?php for ($i=0; $i < 5-$value['stars']; $i++): ?>
                            <i class="glyphicon glyphicon-star-empty"></i>
                        <?php endfor; ?>
                        </div>
                        <a class="text-success" href=<?=url('app/'.$value['id'])?>><small><?=$value['price'] == 0 ? 'Free' : $value['price'].' MMK'?></small></a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php render('master.foot') ?>
