<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <form action="" method="post">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $submenu['id'] ?>">
                <div class="form-group">
                    <label for="menu_id">Menu ID</label>
                    <input type="text" class="form-control" id="menu_id" name="menu_id" value="<?= $submenu['menu_id'] ?>">
                    <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title'] ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url'] ?>">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon'] ?>">
                    <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="is_active">Active</label>
                    <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $submenu['is_active'] ?>">
                    <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->