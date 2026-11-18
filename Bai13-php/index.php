<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
            display: flex;
            gap:20px;
            background-color:blue;
            padding: 10px;
            
        }
        a{
            text-decoration:none;
            color:white;
            border-radius: 25px;
        }
        a:hover{
            border :1px solid white;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['dangnhap'])){
            header("Location: dangnhap.php");
        }
        include 'connect.php';
    ?>

    <header>
        <nav>
            <ul>
                <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li><a href="index.php?page_layout=taikhoan">Tài khoản</a></li>
                <li><a href="index.php?page_layout=danhmuc">Danh mục</a></li>
                <li><a href="index.php?page_layout=phim">Phim</a></li>
            </ul>
        </nav>
    </header>

    <?php
        if(isset($_GET['page_layout'])){
            $page = $_GET['page_layout'];
            switch($page){
                case 'trangchu':
                    include 'trangchu.php';
                    break;
                case 'taikhoan':
                    include 'taikhoan.php';
                    break;
                case 'danhmuc':
                    include 'danhmuc.php';
                    break;
                case 'phim':
                    include 'phim.php';
                    break;
            }
        }
    ?>
</body>
</html>