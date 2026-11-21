<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            margin:auto;
            width: 15%;
            background-color: aqua;
            padding:10px;
            border-radius:10px;
        }
        .the{
            display: block;
            width: 100%;
            margin: 5px auto;
            border-radius: 5px;
        }
        .gt{
            width: 25%;
        }
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $sql = "select * from nguoi_dung where id = '$id'";
        $result = mysqli_query($conn,$sql);
        $nguoidung = mysqli_fetch_assoc($result);
    ?>
    <h1>Cập nhật tài khoản</h1>
    <!-- action=" link trang " -->
    <form class="khoi" action="index.php?page_layout=capnhattaikhoan&id=<?php echo $id ?>" method="POST">
        <div>
            <input class="the" type="text" name="tenDangNhap" value="<?php echo $nguoidung['ten_dang_nhap']?>" id="" placeholder="Tên Đăng Nhập">
        </div>
        <div >
            <input class="the" type="password" name="matKhau" value="<?php echo $nguoidung['mat_khau']?>" id="" placeholder="Mật khẩu">
        </div>
        <div >
            <input class="the" type="email" name="email" value="<?php echo $nguoidung['email']?>" id="" placeholder="Email">
        </div>
        <div >
            <input class="the" type="text" name="hoten" value="<?php echo $nguoidung['ho_ten']?>" id="" placeholder="Họ và Tên">
        </div>
        <div >
            <input class="the" type="date" name="ngaysinh" value="<?php echo $nguoidung['ngay_sinh']?>" id="" placeholder="Ngày sinh">
        </div>
        <div >
            <input class="the" type="text" name="sdt" value="<?php echo $nguoidung['so_dien_thoai']?>" id="" placeholder="Số điện thoại">
        </div>
        <div class="the">
            <input class="gt" type="radio" name="gioitinh" id="" value="1" <?php echo $nguoidung['gioi_tinh']==true?"checked":"" ?> >Nam
            <input class="gt" type="radio" name="gioitinh" id="" value="0" <?php echo $nguoidung['gioi_tinh']==false?"checked":"" ?> >Nữ
        </div>
        <button class="the">Thêm</button>
    </form>

    <?php
        if(isset($_POST['tenDangNhap']) && 
           isset($_POST['matKhau']) && 
           isset($_POST['email']) && 
           isset($_POST['hoten']) &&
           isset($_POST['ngaysinh']) &&
           isset($_POST['sdt']) &&
           isset($_POST['gioitinh']))
        {
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];
            $email = $_POST['email'];
            $hoten = $_POST['hoten'];
            $ngaysinh = $_POST['ngaysinh'];
            $sdt = $_POST['sdt'];
            $gioitinh = $_POST['gioitinh'];
            if(!empty($tenDangNhap) && 
                !empty($matKhau) && 
                !empty($email) && 
                !empty($hoten) &&
                !empty($ngaysinh) &&
                !empty($sdt)
                ){
                //người dùng nhập đủ thông tin
                $sql = "UPDATE `nguoi_dung` SET `ten_dang_nhap`='$tenDangNhap',
                `mat_khau`='$matKhau',
                `email`='$email',
                `ho_ten`='$hoten',
                `ngay_sinh`='$ngaysinh',
                `so_dien_thoai`='$sdt',
                `gioi_tinh`='$gioitinh' WHERE  id='$id'";
                
                $result = mysqli_query($conn,$sql);

                if($result){
                    header("Location: index.php?page_layout=taikhoan");
                }else{
                    echo "Thêm người dùng thất bại!";
                }
            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }
        
    ?>
</body>
</html>