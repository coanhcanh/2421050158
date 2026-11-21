<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khung {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .phim {
            display: flex;
            background-color: grey;
            width: 50%;
            border-radius:20px;
            margin: 10px 0;

        }
        .poster{
            background-color: yellow;
            width: 48%;
            margin: 1%;
            border-radius:15px;
        }
        .thong-tin{
            width: 50%;
        }
        .cn-x{
            display: flex;
            height: 10%;
            align-items: center;
            justify-content: space-between;
        }
        h1, h2{
            text-align: center;
        }
        .capnhat{
            background-color: white;
            border :1px solid white;
            color:black;
        }
        .capnhat:hover{
            border :1px solid black;
        }
        .xoa:hover{
            border :1px solid black;
        }
        .xoa{
            background-color: silver;
            border :1px solid silver;
            color:black;
        }
        
    </style>
</head>
<body>
    <h1>Danh sách phim</h1>
    <?php
        $sql = "SELECT phim.*, dao_dien.ho_ten AS ten_dao_dien
        FROM phim
        JOIN dao_dien ON phim.dao_dien_id = dao_dien.id";

        $result = mysqli_query($conn,$sql);
    ?>
    <div class="khung">
    <!-- phải có phần này -->
    <?php
            while($row = mysqli_fetch_assoc($result))
                {
        ?>
    <div class="phim">
        <div class="poster">
            <img src="" alt="Đây là ảnh">
        </div>
        <div class="thong-tin">
            <h2><?php echo $row['ten_phim'] ?></h2>
            <p>Quốc gia: <?php echo $row['quoc_gia'] ?></p> 
            <p>Đạo diễn: <?php echo $row['ten_dao_dien'] ?></p>
            <p>Năm sản xuất: <?php echo $row['nam'] ?></p>
            <div class="cn-x">
                <p>Độ tuổi: <?php echo $row['do_tuoi'] ?></p>
                <a class="capnhat" href="index.php?page_layout=capnhatphim&id=<?php echo $row['id']?>">Cập nhật phim</a>
                <a class="xoa" href="index.php?page_layout=xoaphim&id=<?php echo $row['id']?>">Xóa</a>
            </div>
            <p>Mô tả: <?php echo $row['mo_ta'] ?></p>
        </div>
    </div>
    <!-- đóng ngoặc nhọn của phía trên -->
    <?php
            }
        ?>
    </div>
</body>
</html>