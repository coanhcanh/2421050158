create database netflix;

-- phim
-- the_loai
-- dien_vien
-- dao_dien
-- tap_phim
-- nguoi_dung

--Table Người dùng (nguoi_dung)
CREATE TABLE nguoi_dung (
    id int AUTO_INCREMENT PRIMARY KEY ,
    ten_dang_nhap varchar(30) NOT NULL,
    mat_khau varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    ho_ten varchar(50) NOT NULL,
    ngay_sinh date NOT NULL,
    so_dien_thoai varchar(10) NOT NULL,
    gioi_tinh boolean  NOT NULL
)

-- the_loai
id key AUTO_INCREMENT int,
ten_the_loai varchar(255),

CREATE TABLE the_loai (
    id int AUTO_INCREMENT PRIMARY KEY ,
    ten_the_loai varchar(255) NOT NULL
)

-- dien_vien
id key AUTO_INCREMENT int,
ho_ten varchar(100),
ngay_sinh date,

CREATE TABLE dien_vien (
    id int AUTO_INCREMENT PRIMARY KEY ,
    ho_ten varchar(100) NOT NULL,
    ngay_sinh date NOT NULL
    )

-- dao_dien
id key AUTO_INCREMENT int,
ho_ten varchar(100),
ngay_sinh date,

CREATE TABLE dao_dien(
    id int AUTO_INCREMENT PRIMARY KEY ,
    ho_ten varchar(100) NOT NULL,
    ngay_sinh date NOT NULL
    )

--phim
id key AUTO_INCREMENT int,
ten_phim varchar(255),
quoc_gia varchar(100),
dao_dien_id int,
nam datetime,
do_tuoi int,
mo_ta varchar(255)

CREATE TABLE phim(
    id int AUTO_INCREMENT PRIMARY KEY ,
    ten_phim varchar(255),
    quoc_gia varchar(100),
    dao_dien_id int,
    nam datetime,
    do_tuoi int,
    mo_ta varchar(255)
    )

--phim_the_loai
id key AUTO_INCREMENT int,
phim_id int,
the_loai_id int,

CREATE TABLE phim_the_loai(
    id int AUTO_INCREMENT PRIMARY KEY ,
    phim_id int,
    the_loai_id int)

--phim_dien_vien
id key AUTO_INCREMENT int,
phim_id int,
dien_vien_id int

CREATE TABLE phim_dien_vien(
    id int AUTO_INCREMENT PRIMARY KEY ,
    phim_id int,
    dien_vien_id int)