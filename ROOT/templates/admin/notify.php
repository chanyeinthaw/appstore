<?php render('master.head', compact('title', 'subtitle')) ?>

<?php render('master.sidebar', compact('title', 'categories', 'categoryGames', 'wishlistCount')) ?>
<?php render('master.navbar', compact('notifications','selectHome', 'selectNewReleases', 'currentPage')) ?>

<div class="contents">
    <div class="container">
        <ul class="nav nav-tabs">
            <li><a href=<?= url('admin') ?>>Users</a></li>
            <li><a href=<?= url('admin/transitions') ?>>Transitions</a></li>
            <li><a href=<?= url('admin/inappropirate') ?>>Inappropirate Apps</a></li>
            <li class="active"><a href=<?= url('admin/notify') ?>>Notify</a></li>
        </ul>
        <div class="col-md-6">
            <br>
            <div class="panel panel-default unround">
                <div class="panel-heading">
                    Notify One
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action=<?= url('noti')?>>
                        <div class="form-group">
                            <label for="id" class="control-label col-sm-3">User</label>
                            <div class="col-sm-8">
                                <select class="unround form-control" name="id">
                                <?php foreach ($users as $key => $value): ?>
                                    <option value=<?= $value['id'] ?>><?= $value['name'] ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contents" class="control-label col-sm-3">Content</label>
                            <div class="col-sm-8">
                                <textarea name="contents" class="unround form-control" placeholder="Content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="proirity" class="control-label col-sm-3">Proirity</label>
                            <div class="col-sm-8">
                                <select class="unround form-control" name="proirity">
                                    <option value="1">Important</option>
                                    <option value="2">High</option>
                                    <option value="3">Normal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group pull-right">
                            <div style="margin-right:55px">
                                <button type="submit" class="unround btn btn-default"><i class="glyphicon glyphicon-info-sign"></i> Send Notification</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="unround alert alert-danger">
                <ul>
                    <li>Error</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <br>
            <div class="panel panel-default unround">
                <div class="panel-heading">
                    Notify All
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action=<?= url('noti')?>>
                        <input type="hidden" name="id" value="0">
                        <div class="form-group">
                            <label for="contents" class="control-label col-sm-3">Content</label>
                            <div class="col-sm-8">
                                <textarea name="contents" class="unround form-control" placeholder="Content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="proirity" class="control-label col-sm-3">Proirity</label>
                            <div class="col-sm-8">
                                <select class="unround form-control" name="proirity">
                                    <option value="1">Important</option>
                                    <option value="2">High</option>
                                    <option value="3">Normal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group pull-right">
                            <div style="margin-right:55px">
                                <button type="submit" class="unround btn btn-default"><i class="glyphicon glyphicon-info-sign"></i> Send Notification</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="unround alert alert-danger">
                <ul>
                    <li>Error</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php render('master.foot') ?>