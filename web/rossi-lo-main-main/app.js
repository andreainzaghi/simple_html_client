const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 1.2, stagger: 0.3 });
tl.to(".slider", { y: "-100%", duration: 1.6, delay: 0.6 });
tl.to(".intro", { y: "-100%", duration: 1.2}, "-=1.25");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");


function prova(tilte,descrizione){

  var s = document.getElementById('idprova').innerHTML=tilte;
    var s = document.getElementById('idprova1').innerHTML=descrizione;

}


const circle = document.querySelector('.fa-user-circle');
const login = document.querySelector('.login-pop');
const mapps = document.querySelector('.mappa');


circle.onclick = function(){
  login.classList.toggle('display-no'); 
}

function myFunction6() {

  login.classList.toggle('display-no'); 
  
}
function myFunction8() {

  mapps.classList.toggle('mappa1'); 
  console.log('ciao');
}
 

  function mailSender() {
    const form = document.getElementById('form-mail');
    const formData = new FormData(form);
    var xmlhttp = new XMLHttpRequest();
    var theUrl = "http://localhost/mail.php";
    xmlhttp.open("POST", theUrl);
    xmlhttp.setRequestHeader('Content-Disposition', 'form-data');
    xmlhttp.send(formData);
  }

