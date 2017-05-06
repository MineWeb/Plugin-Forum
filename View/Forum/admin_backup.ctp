<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('FORUM__BACKUPS') ?></h3>
                </div>
                <div class="box-body">
                    <a class="btn btn-large btn-block btn-success" href="/admin/forum/forum/backup/new"><?= $Lang->get('FORUM__CREATE__BACKUP') ?></a>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered dataTable">
                        <thead>
                        <tr>
                            <th><?= $Lang->get('GLOBAL__NAME') ?></th>
                            <th><?= $Lang->get('FORUM__CREATE'); ?></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lists as $list): ?>
                            <tr>
                                <td><?= $list['name']; ?></td>
                                <td><?= $list['date']; ?></td>
                                <td class="right">
                                    <a onClick="confirmDel('<?= $this->Html->url(array('controller' => 'forum', 'action' => '', 'admin' => true)) ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <a class="btn btn-large btn-block btn-danger" href="/admin/forum/forum/backup/new"><?= $Lang->get('FORUM__DELETEALL__BACKUP') ?></a>
                </div>
            </div>

        </div>
    </div>
</section>