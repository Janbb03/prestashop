let Planicie = document.getElementById('planicie');
let carretera = document.getElementById('carretera');
let montanas = document.getElementById('montanas');
let montanaslejanas = document.getElementById('montanaslejanas');
let moto = document.getElementById('moto');

window,addEventListener('scroll', function(){
  let value = window.scrollY;
  carretera.style.top= value * 0.03 + '%';
  montanas.style.top= value *0.03 + '%';
  montanaslejanas.style.top= value * 0.05 + '%';
  moto.style.top= value * 0.05 + '%';
})