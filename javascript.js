      
    function more(){
    let nextBtn = document.querySelector('.next');
      let currentIte= 5;
      
      nextBtn.onclick = () =>{
         let boxes = [...document.querySelectorAll('.work-space .content .nxt .mySlides-fade')];
         for (var i = currentIte; i < currentIte + 5; i++){
            boxes[i].style.display = 'inline-block';
         }
         currentIte += 5;

         if(currentIte >= boxes.length){
          nextBtn.style.display = 'none';
         }
      }


      let loadMoreBtn = document.querySelector('#load-more');
      let currentItem = 3;
      
      loadMoreBtn.onclick = () =>{
         let boxes = [...document.querySelectorAll('.work-space .content .products .left-img')];
         for (var i = currentItem; i < currentItem + 3; i++){
            boxes[i].style.display = 'inline-block';
         }
         currentItem += 3;
      
         if(currentItem >= boxes.length){
            loadMoreBtn.style.display = 'none';
         }
      }
   }
const menu=document.querySelector('.menu')
const menuimag=document.querySelector('.menu img')
const drop_downmenu=document.querySelector('.drop_downmenu')
menu.onclick=function(){
  drop_downmenu.classList.toggle('open')
 
}


   