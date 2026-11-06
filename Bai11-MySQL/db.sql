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
    gioi_tinh boolean  NOT NULL   --Nam 1, Nữ 0--
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
    ten_phim varchar(255) NOT NULL,
    quoc_gia varchar(100) NOT NULL,
    dao_dien_id int NOT NULL,
    nam datetime NOT NULL,
    do_tuoi int NOT NULL,
    mo_ta varchar(255) NOT NULL
    )

--phim_the_loai
id key AUTO_INCREMENT int,
phim_id int,
the_loai_id int,

CREATE TABLE phim_the_loai(
    id int AUTO_INCREMENT PRIMARY KEY ,
    phim_id int NOT NULL,
    the_loai_id int NOT NULL)

--phim_dien_vien
id key AUTO_INCREMENT int,
phim_id int,
dien_vien_id int

CREATE TABLE phim_dien_vien(
    id int AUTO_INCREMENT PRIMARY KEY ,
    phim_id int NOT NULL,
    dien_vien_id int NOT NULL)

--Phim--
INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Trại Buôn Người','Việt Nam','1','2026-1-1','18','Phim người lớn');
INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Quỷ Nhập Tràng','Việt Nam','1','2026-1-1','18','Phim kinh dị ');
INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Colody','Hàn Quốc','1','2026-1-1','18','Phim zombie');
INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Tử Chiến Trên Không','Việt Nam','2','2025-1-1','18','Phim lịch sử');
INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Bố Già','Việt Nam','3','2017-1-1','6','Phim người lớn');

--Phim thể loại--
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES ('1','1');
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES ('2','2');
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES ('3','3');
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES ('4','4');
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES ('5','5');

--Phim diễn viên--
INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES ('1','1');
INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES ('2','2');
INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES ('3','3');
INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES ('4','4');
INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES ('5','5');

--Người dùng--
INSERT INTO `nguoi_dung`(`ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES ('CAnh','27122006','coanhcanh06@gmail.com','Nguyễn Vũ Công Anh','2006-12-27','0392442712','1')  --Nam 1, Nữ 0--


SELECT * FROM `phim` p
join `dao_dien`
on p.dao_dien_id = dd.id 
join `phim_the_loai` ptl

SELECT p.ten_phim, dd.ho_ten as `dao_dien`, tl.ten_the_loai FROM `phim` p
join `dao_dien` dd 
on p.dao_dien_id = dd.id 
join `phim_the_loai` ptl 
on p.id = ptl.phim_id 
JOIN the_loai tl 
on tl.id = ptl.the_loai_id
where p.id = 1;