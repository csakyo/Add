'use strict';

{
 const images = [
   '/img/akagi.jpeg',
   '/img/akagi00.jpeg',
   '/img/akagi02.jpeg',
   '/img/akagi03.jpeg',
   '/img/akagi04.jpeg',

 ];

 let currentNum = 0;

function setMainImage(image){
  document.querySelector('main img').src = image;
}

 document.querySelector('main img').src = images[currentNum];

 function removeCurrentClass() {
   document.querySelectorAll('.thumbnails li')[currentNum]
   .classList.remove('current');
 }

 function addCurrentClass() {
   document.querySelectorAll('.thumbnails li')[currentNum]
   .classList.add('current');
 }

 const thumbnails = document.querySelector('.thumbnails');
 images.forEach((image, index) => {
   const li = document.createElement('li');
   if (index === currentNum) {
     li.classList.add('current');
   }

   li.addEventListener('click', () =>{
     setMainImage(image);
     removeCurrentClass();
     currentNum = index;
     addUrrentClass();
   });

   const img = document.createElement('img');
   img.src = image;
   li.appendChild(img);
   thumbnails.appendChild(li);
 });

 const next = document.getElementById('next');
 next.addEventListener('click', () => {
   removeCurrentClass();
   currentNum++;
   if (currentNum === images.length) {
     currentNum = 0;
   }
   addCurrentClass();
   setMainImage(images[currentNum]);
 });

 const prev = document.getElementById('prev');
 prev.addEventListener('click', () => {
   removeCurrentClass();
   currentNum--;
   if (currentNum < 0 ) {
     currentNum = images.length - 1;
   }
   addCurrentClass();
   setMainImage(images[currentNum]);
 });

 let timeoutId;

 function playSlideshow() {
    timeoutId = setTimeout(() => {
      next.click();
      playSlideshow();
    }, 10000);
  }

  const play = document.getElementById('play');
  const pause = document.getElementById('pause');

  // play.addEventListener('click', () => {
  //  play.classList.add('hidden');
  //  pause.classList.remove('hidden');
  //   playSlideshow();
  // });
  //
  // pause.addEventListener('click', () => {
  //  play.classList.remove('hidden');
  //  pause.classList.add('hidden');
  //  clearTimeout(timeoutId);
  // });

  window.addEventListener('load', function() {

     playSlideshow();

 })

}
