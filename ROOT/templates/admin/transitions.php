<?php
require __ROOT__.'templates/master/head.php';
require __ROOT__.'templates/master/sidebar.php';
require __ROOT__.'templates/master/navbar.php';

?>

<div class="contents">
    <div class="container">
        <ul class="nav nav-tabs">
            <li><a href=<?= url('admin') ?>>Users</a></li>
            <li><a href=<?= url('admin/cateplat') ?>>Categories &amp; Platforms</a></li>
            <li class="active"><a href=<?= url('admin/transitions') ?>>Transitions</a></li>
            <li><a href=<?= url('admin/transitionreports') ?>>Transition Reports</a></li>
            <li><a href=<?= url('admin/inappropirate') ?>>Inappropirate Apps</a></li>
            <li><a href=<?= url('admin/notify') ?>>Notify</a></li>
        </ul>
        <br>
        <?php if (($error = with('error')) != null): ?>
            <div class="unround alert alert-danger">
                <ul>
                <?php foreach ($error as $key => $value): ?>
                    <li><?= $value ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="col-md-4">
        <?php if (isset($deposit)): ?>
            <table class="table table-hover table-condensed">
                <caption>Deposit Transitions <a href=<?= url('admin/transitions/deleteall/1') ?> class="unround pull-right btn btn-default btn-xs"><small>DELETE ALL</small></a></caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>AMOUNT</th>
                        <th>FROM</th>
                        <th>DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($deposit as $key => $value): ?>
                        <tr>
                            <td> <?= $value->id ?></td>
                            <td> <?= $value->amount ?></td>
                            <td> <?= $value->billingInfo ?></td>
                            <td> <?= (new DateTime($value->date))->format('M d, Y') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <table class="table table-hover table-condensed">
                <caption>Deposit Transitions</caption>
                <thead>
                    <tr>
                        <th>
                            NO RECORDS
                        </th>
                    </tr>
                </thead>
            </table>
        <?php endif ?>
        </div>
        <div class="col-md-4">
        <?php if (isset($withdraw)): ?>
            <table class="table table-hover table-condensed">
                <caption>Withdraw Transitions <a href=<?= url('admin/transitions/deleteall/2') ?> class="unround pull-right btn btn-default btn-xs"><small>DELETE ALL</small></a></caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>AMOUNT</th>
                        <th>TO</th>
                        <th>DATE</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($withdraw as $key => $value): ?>
                    <tr>
                        <td> <?= $value->id ?></td>
                        <td> <?= $value->amount ?></td>
                        <td> <?= $value->billingInfo ?></td>
                        <td> <?= (new DateTime($value->date))->format('M d, Y') ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <table class="table table-hover table-condensed">
                <caption>Withdraw Transitions</caption>
                <thead>
                    <tr>
                        <th>
                            NO RECORDS
                        </th>
                    </tr>
                </thead>
            </table>
        <?php endif ?>
        </div>
        <div class="col-md-4">
        <?php if (isset($pending)): ?>
            <table class="table table-hover table-condensed">
                <caption>Pending Transitons</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>AMOUNT</th>
                        <th>ADDRESS</th>
                        <th>DATE</th>
                        <th>TYPE</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($pending as $key => $value): ?>
                    <tr>
                        <td> <?= $value->id ?></td>
                        <td> <?= $value->amount ?></td>
                        <td> <?= $value->billingInfo ?></td>
                        <td> <?= (new DateTime($value->date))->format('m/d/y') ?></td>
                        <td>
                        <?php if ($value->type == 1): ?>
                            <strong>D</strong>
                        <?php else: ?>
                            <strong>W</strong>
                        <?php endif; ?>
                        </td>
                        <td>
                            <a href=<?= url('admin/transitions/confirm/' . $value->id ) ?> class="unround btn btn-success btn-xs glyphicon glyphicon-ok" data-toggle="tooltips" data-placement="right" title="Confirm this transition."></a>
                            <a href=<?= url('admin/transitions/delete/' . $value->id ) ?> class="unround btn btn-danger btn-xs glyphicon glyphicon-remove" data-toggle="tooltips" data-placement="right" title="Delete this transition."></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <table class="table table-hover table-condensed">
                <caption>Pending Transitons</caption>
                <thead>
                    <tr>
                        <th>
                            NO RECORDS
                        </th>
                    </tr>
                </thead>
            </table>
        <?php endif ?>
        </div>
    </div>
</div>
<?php
require __ROOT__.'templates/master/foot.php';
?>
