
let closebtn = document.querySelector('.close');
  let menubtn = document.querySelector('#menubtn');
let floatingmobilemenu = document.querySelector('.wrapper');

menubtn.addEventListener("click", function(){
   floatingmobilemenu.classList.add('showmenu');
}); 
closebtn.addEventListener("click", function(){
   floatingmobilemenu.classList.remove('showmenu');
}); 


let closecard = document.querySelector('.banner-close2');
let carticonbtn = document.querySelector('#carticonbtn');
let carticonbtn2 = document.querySelector('#carticonbtn2');
let sidebarwrapper = document.querySelector('.wrapper2');

carticonbtn.addEventListener("click", function(){
    sidebarwrapper.classList.add('showcartsidebar');
 }); 
 carticonbtn2.addEventListener("click", function(){
   sidebarwrapper.classList.add('showcartsidebar');
}); 
 closecard.addEventListener("click", function(){
    sidebarwrapper.classList.remove('showcartsidebar');
 }); 
 