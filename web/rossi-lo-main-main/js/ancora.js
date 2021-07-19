$( document ).ready(function() {
  console.log('ìsuca');
});


  // console.log(widthr);
  // console.log(height);



function navLink(kind) {
  var widthr= window.innerWidth ;
  var element = document.getElementById(kind);
  var rect = element.getBoundingClientRect();
  console.log(rect.top, rect.right, rect.bottom, rect.left);
  
  var spostati = rect.left +(widthr/2);
  console.log(spostati);
  window.scroll(0, spostati);
 
    
}



