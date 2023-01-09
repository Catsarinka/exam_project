// CANVAS

var canvas;
function initiate(){
  var elem = document.getElementById('myCanvas');
  canvas = elem.getContext('2d');

  

  addEventListener('mousemove', animation);
}
function animation(e){
  canvas.clearRect(0, 0, 500, 300);

  var xmouse = e.clientX;
  var ymouse = e.clientY;
  var xcenter = 205;
  var ycenter = 115;
  var ang = Math.atan2(ymouse - ycenter,xmouse - xcenter);
  var x = xcenter + Math.round(Math.cos(ang) * 1);
  var y = ycenter + Math.round(Math.sin(ang) * 1);

  canvas.beginPath();
  canvas.arc(xcenter, ycenter, 4, 0, Math.PI * 2, false);
  canvas.moveTo(xcenter + 34, 115);
  canvas.arc(xcenter + 30, 115, 4, 0, Math.PI * 2, false);
  canvas.stroke();



  canvas.beginPath();
  canvas.moveTo(x + 10, y);
  canvas.arc(x, y, 2, 0, Math.PI * 2, false);
  canvas.moveTo(x + 60, y);
  canvas.arc(x + 30, y, 2, 0, Math.PI * 2, false);

canvas.fill();
}
addEventListener("load", initiate);





// МОДАЛЬНЫЕ ОКНА

// Модель
var modal = document.getElementById("myModal");

// Изображение внутри МО 
var I = document.getElementById("I");
var modalImg = document.getElementById("picture");

var II = document.getElementById("II");
var III = document.getElementById("III");


//ФУНКЦИИ МО

I.onclick = function () {
  modal.style.display = "block";
  modalImg.src = this.src;
}

II.onclick = function () {
  modal.style.display = "block";
  modalImg.src = this.src;
}

III.onclick = function () {
  modal.style.display = "block";
  modalImg.src = this.src;
}




// КНОПКА

//  Элемент <span>
var span = document.getElementsByClassName("close")[0];

// Нажатие
span.onclick = function () {
  modal.style.display = "none";
}

// ЗАГОЛОВКИ (Динамический элемент)

const title = document.getElementById('title')


setTimeout(() => {
  addStylesTo(title)
}, 1000)

function addStylesTo(node) {
  node.style.color = '#60330b'
  node.style.textDecoration = 'underline'
  node.style.background = '#e2d3c5'
}