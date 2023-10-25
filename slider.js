let img_slider= document.getElementsByClassName("img_slider");
let etape=0;
let nbr_img = img_slider.length;
let precedent =document.querySelector('.precedent');
let suivant = document.querySelector('.suivant');
function enleverActiveImage(){
    for (let i =0 ;i<img_slider.length;i++){
        img_slider[i].classList.remove('active');

    }
}
//quand l'utilisateur clique sur fleche de droite :
suivant.addEventListener('click',function(){
    etape++;
    if(etape >=nbr_img){
        etape=0;
    }
    enleverActiveImage();
    img_slider[etape].classList.add('active');
})
//quand l'utilisateur clique sur fleche de gauche :
precedent.addEventListener('click',function(){
    etape--;
    if (etape < 0){
        etape = nbr_img - 1;
    }
    enleverActiveImage();
    img_slider[etape].classList.add('active');
})
//rendre le slider autonome (diaporama):
setInterval(function(){
    etape++;
    if(etape >=nbr_img){
        etape=0;
    }
    enleverActiveImage();
    img_slider[etape].classList.add('active');
},4500)
