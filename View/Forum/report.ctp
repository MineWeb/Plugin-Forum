<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('FORUM__MSGREPORT') ?></h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-responsive dataTable">
                                <thead>
                                <th>Par</th>
                                <th>Date</th>
                                <th>Raison</th>
                                <th>Content</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                <?php foreach ($msgreports as $msgreport): ?>
                                    <tr>
                                        <td><?= $msgreport['MsgReport']['user']; ?></td>
                                        <td><?= $msgreport['MsgReport']['date']; ?></td>
                                        <td><?= $msgreport['MsgReport']['reason']; ?></td>
                                        <td><?= $msgreport['MsgReport']['content']; ?></td>
                                        <td>
                                            <a  href="/topic/<?= $msgreport['MsgReport']['href']; ?>/#<?= $msgreport['MsgReport']['id_msg']; ?>" class="btn btn-info"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                                            <form style="display: inline-block" action="" method="post">
                                                <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden" />
                                                <input type="hidden" name="id" value="<?= $msgreport['MsgReport']['id']; ?>" />
                                                <button type="submit" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>