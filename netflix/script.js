var danhSachPhim=[
    {
        id:1,
        ten: "Cảnh sát trưởng Labrado",
        thoiLuong:20,
        banner:"anh/banner.jpg",
        trailer:"",
},
{
    id:2,
    ten:"Zootopia",
    thoiLuong:15,
    banner:"",
    trailer:"",
}
]

function xemTrailer(){
    document.getElementsByClassName("banner")[0].style="display:none";
    document.getElementsByClassName("banner")[1].style="display:block";
}