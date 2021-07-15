$( document ).ready(function() {
  
 });

function myFunction() {
    var element = document.getElementById('cs');
    var rect = element.getBoundingClientRect();
    console.log(rect.top, rect.right, rect.bottom, rect.left);
    window.scroll(0, rect.left) ;
    
  }


  
function myFunction1() {
  
    var element1 = document.getElementById('home');
    var rect = element1.getBoundingClientRect();
    console.log(rect.top, rect.right, rect.bottom, rect.left);
    window.scroll(0, rect.left) ;
    
  }



  
function myFunction2() {
 
    var element2 = document.getElementById('contatti');
    var rect = element2.getBoundingClientRect();
    console.log(rect.top, rect.right, rect.bottom, rect.left);
    window.scroll(0, rect.left) ;
    
  }



  
function myFunction3() {
  
    var element3 = document.getElementById('area');
    var rect = element3.getBoundingClientRect();
    console.log(rect.top, rect.right, rect.bottom, rect.left);
    window.scroll(0, rect.left) ;
    
  }
