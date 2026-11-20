<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ttk{
            background-color:aqua;
            padding: 5px;
            
        }
        table{
            margin:5px;
            text-align:center;
        }
        .capnhat{
            background-color:green;
        }
        .xoa{
            background-color:red;
        }
    </style>
</head>
<body>
    <h1>Tài khoản</h1>
    <a class="ttk" href="index.php?page_layout=themtaikhoan">Thêm tài khoản</a>
    <?php
        $sql = "select * from nguoi_dung";
        $result = mysqli_query($conn,$sql);
    ?>
    
    <table border>
        <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Số điện thoại</th>
            <th>Giới tính</th>
            <th>Chức năng</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
                {
        ?>
        <!-- kẹp giữa 2 đoạn php -->
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_dang_nhap'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['ho_ten'] ?></td>
            <td><?php echo $row['ngay_sinh'] ?></td>
            <td><?php echo $row['so_dien_thoai'] ?></td>
            <!-- ==true thì Nam còn sai là Nữ -->
            <td><?php echo $row['gioi_tinh']==true?"Nam":"Nữ" ?></td>
            <td>
                <a class="capnhat" href="index.php?page_layout=capnhattaikhoan&id=<?php echo $row['id']?>">Cập nhật</a>
                <a class="xoa" href="index.php?page_layout=xoataikhoan&id=<?php echo $row['id']?>">Xóa</a>
            </td>
        </tr>
        <!-- dấu đóng ngoặc của phía trên -->
        <?php
            }
        ?>
    </table>
</body>
</html>