<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Active</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php foreach ($daftar as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $d['id']; ?></td>
                            <td><?= $d['name']; ?></td>
                            <td><?= $d['email']; ?></td>
                            <td><?= $d['image']; ?></td>
                            <td><?= $d['is_active']; ?></td>
                            <td><?= date('d F Y', $d['date_created']); ?></td>
                            <td><a href="<?= base_url('admin/edit/' . $d['id']) ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('admin/hapus/' . $d['id']) ?>" class="badge badge-danger" onclick="return confirm('Are you sure to delete <?= $d['email']; ?>?')">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->