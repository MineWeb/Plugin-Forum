<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('FORUM__HISTORY') ?></h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post" data-ajax="true">
                                <input type="hidden" name="drop" value="42" />
                                <div class="ajax-msg"></div>
                                <div class="pull-left">
                                    <button class="btn btn-danger" type="submit"><?= $Lang->get('FORUM__DROP') ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-responsive dataTable">
                                <thead>
                                    <th>Pseudo</th>
                                    <th>Date</th>
                                    <th>Ip</th>
                                    <th>Categorie</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                <?php foreach ($history as $h): ?>
                                    <tr>
                                        <td><?= $h['Historie']['pseudo']; ?></td>
                                        <td><?= $h['Historie']['date']; ?></td>
                                        <td><?= $h['Historie']['ip']; ?></td>
                                        <td><?= $h['Historie']['category']; ?></td>
                                        <td><?= $h['Historie']['action']; ?></td>
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
</section>