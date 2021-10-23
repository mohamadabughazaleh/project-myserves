
//left nav
let btn=document.querySelector("#btn"),
sidedar=document.querySelector(".sidebar"),
searchbtn=document.querySelector(".fa-search");
btn.onclick = function(){
    
    sidedar.classList.toggle("active");
}
searchbtn.onclick = function(){
    
    sidedar.classList.toggle("active");
}
//main page
function collapsesidebar(){
    var body = document.getElementById("expends");

    body.classList.toggle("sidebar-expand");
}