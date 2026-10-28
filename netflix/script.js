var danhSachPhim=[
    {
        theLoai:1,
        id:1,
        ten: "Cảnh sát trưởng Labrado",
        thoiLuong:20,
        banner:"anh/theLoai1/poster1.webp",
        trailer:"https://www.youtube.com/embed/bssQnmgQQxE?si=jDQOockYi2kG0G5w",
},
{
    theLoai:1,
    id:2,
    ten:"Inside Out 2",
    thoiLuong:15,
    banner:"anh/theLoai1/poster2.webp",
    trailer:"https://www.youtube.com/embed/u9ksbrXrJnw?si=BhFW4tWmCFa7xmgC",
},
{
    theLoai:1,
    id:3,
    ten:"Sonic The Hedgehog",
    thoiLuong:15,
    banner:"anh/theLoai1/poster3.webp",
    trailer:"https://www.youtube.com/embed/szby7ZHLnkA?si=t8x6vjmYfcxIipR2",
},
{
    theLoai:1,
    id:4,
    ten:"TURBO",
    thoiLuong:15,
    banner:"anh/theLoai1/poster4.webp",
    trailer:"https://www.youtube.com/embed/O3aUGTWXkx4?si=FRisZ0A4Xx8OGLlp",
},
{
    theLoai:1,
    id:5,
    ten:"Coco",
    thoiLuong:15,
    banner:"anh/theLoai1/poster5.webp",
    trailer:"https://www.youtube.com/embed/7kszEYj2tt8?si=-_IxkUS_gdrAUVl7",
},
{
    theLoai:2,
    id:1,
    ten:"WALL-E (Robot biết yêu)",
    thoiLuong:15,
    banner:"anh/theLoai2/poster1.webp",
    trailer:"https://www.youtube.com/embed/mJnO9J8L10s?si=qUXVe3rAGnPwD88v",
},
{
    theLoai:2,
    id:2,
    ten:"Despicable Me (Kẻ cắp mặt trăng)",
    thoiLuong:15,
    banner:"anh/theLoai2/poster2.webp",
    trailer:"https://www.youtube.com/embed/GqN7JkMYNz8?si=UbofepSCDW2pLXhI",
},
{
    theLoai:2,
    id:3,
    ten:"Despicable Me (Kẻ trộm mặt trăng 4)",
    thoiLuong:15,
    banner:"anh/theLoai2/poster3.webp",
    trailer:"https://www.youtube.com/embed/g9nnv3zPwe4?si=X9pjAdmWu7Yf7op0",
},
{
    theLoai:2,
    id:4,
    ten:"Oggy và những chú gián tinh nghịch",
    thoiLuong:15,
    banner:"anh/theLoai2/poster4.webp",
    trailer:"https://www.youtube.com/embed/-32B-u_YwRM?si=Neie22x56PwLY_sx",
},
{
    theLoai:2,
    id:5,
    ten:"Cars 3 (Vương quốc xe hơi 3)",
    thoiLuong:15,
    banner:"anh/theLoai2/poster5.webp",
    trailer:"https://www.youtube.com/embed/7Iv6j_Rc9EI?si=cbzvobKn9BXuHoMe",
},
]

function xemTrailer() {
    // Ẩn banner ảnh
    document.getElementsByClassName("banner")[0].style.display = "none";
    // Hiển thị khung trailer
    document.getElementsByClassName("banner")[1].style.display = "block";
}

function chonPhim(theLoai, id){
    for (let i = 0; i < danhSachPhim.length; i++) {
        if(danhSachPhim[i].theLoai == theLoai){    
            if(danhSachPhim[i].id == id) {   
                document.getElementsByClassName("banner-anh")[0].src=danhSachPhim[i].banner;
                document.getElementsByTagName("iframe")[0].src=danhSachPhim[i].trailer;
                document.getElementsByClassName("banner")[0].style.display = "block";
                document.getElementsByClassName("banner")[1].style.display = "none";
            }           
        }
    }
}