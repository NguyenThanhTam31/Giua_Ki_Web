<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý Thư viện</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-icons/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Quản lý bệnh nhân</h3>
        <a href="<?= DOMAIN.'app/views/Sach/add.php';?>" class='btn btn-success'>Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Sách</th>
                    <th scope="col">Tên Sách</th>
                    <th scope="col">Năm Xuất Bản</th>
                    <th scope="col">Tên Tác Giả</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sach as $sachs) {
                ?>
                    <tr>
                        <th scope="row"><?= $sach->getId(); ?></th>
                        <td><?= $sach->getTenSach(); ?></td>
                        <td><?= $sach->getNamXuatBan(); ?></td>
                        <td><?= $sach->getIdTacGia(); ?></td>
                        <td><a href="<?=DOMAIN. 'app/views/Sach/edit.php?id = '.$sach->getId() ?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="<?=DOMAIN. 'app/views/Sach/delete.php?id = '.$sach->getId() ?>"><i class="bi bi-trash-fill"></i></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>