<?php
require __ROOT__.'templates/master/head.php';
require __ROOT__.'templates/master/sidebar.php';
require __ROOT__.'templates/master/navbar.php';

?>

<div class="contents">
    <div class="container">
    <?php if (session('user')->type > 1): ?>
        <ul class="nav nav-pills">
            <li><a href=<?= url('myapps') ?>>Purchased</a></li>
            <li><a href=<?= url('myapps/published') ?>>Published</a></li>
            <li><a href=<?= url('myapps/statistics') ?>>Statistics</a></li>
            <li class="active"><a href=<?= url('myapps/inappropirate') ?>>Inappropirate Apps</a></li>
            <li><a href=<?= url('myapps/publish') ?>>Publish</a></li>
        </ul>
        <hr>
    <?php endif; ?>
        <table class="table table-hover">
        <?php if (isset($apps)): ?>
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>APP NAME</th>
                    <th>PLATFORM</th>
                    <th>REPORT COUNT</th>
                </tr>
            </thead>
            <tbody>
            <?php for($i = 0; $i < count($apps); $i++): ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><a href=<?= url('app/'.$apps[$i]['id']) ?> data-toggle="tooltips" data-placement="right" title="Review App"><?= $apps[$i]['name'] ?></a> <i class="glyphicon glyphicon-share-alt"></i></td>
                    <td><?= $apps[$i]['platform'] ?></td>
                    <td><span class="badge"><?= $apps[$i]['reportcount'] ?></span></td>
                </tr>
            <?php endfor; ?>
            </tbody>
        <?php else: ?>
            <thead>
                <tr>
                    <th>
                        NO RECORDS
                    </th>
                </tr>
            </thead>
        <?php endif; ?>
        </table>
    </div>
</div>
<?php
require __ROOT__.'templates/master/foot.php';
?>
