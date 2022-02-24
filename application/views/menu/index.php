<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

</div>
<!-- /.container-fluid -->
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Menu</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($menu as $m) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $m['menu']; ?></td>
                <td>
                    <a href="">edit</a>
                    <a href="">delete</a>
                </td>

            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>

</div>
<!-- End of Main Content -->