const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 1.2, stagger: 0.3 });
tl.to(".slider", { y: "-100%", duration: 1.2, delay: 0.5 });
tl.to(".intro", { y: "-100%", duration: 1.2}, "-=1.2");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");


function prova(tilte,descrizione){

  var s = document.getElementById('idprova').innerHTML=tilte;
    var s = document.getElementById('idprova1').innerHTML=descrizione;

}


const circle = document.querySelector('.fa-user-circle');
const login = document.querySelector('.login-pop');


circle.onclick = function(){
  login.classList.toggle('display-no'); 
}