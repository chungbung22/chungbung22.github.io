var SOCKET_URL = 'wss://fierce-plains-17880.herokuapp.com/';
var TEAM_NAME  = 'hashtag';
var socket;
var bang;
var bullets = [];
var bulletSize = 20;
var Y_AXIS = 1;
var cloud1,cloud2,cloud3,cloud4,cloud5,cloud6;
var speed;
var x,y;
var images;
var random2;
var song, bang;
var color1, color2;
var planes = [];
var counter, counter2;
var start;
var width=960;
var height=540;

function preload() {
	img1 = loadImage("assets/plane.png");
	img2 = loadImage("assets/bullethole.png");
	img3= loadImage("assets/cloud1.png");
	img4 = loadImage("assets/cloud2.png");
	img5 = loadImage("assets/cloud3.png");
	img6 = loadImage("assets/cloud4.png");
	img7 = loadImage("assets/cloud5.png");
	img8 = loadImage("assets/cockpit.png");
	img9 = loadImage("assets/logo.png");
	images = [img3, img4, img5, img6, img7];
	soundFormats('mp3');
	song = loadSound('assets/8bit_get_lucky.mp3');
	noLoop();
	}
function setup() {
  createCanvas(960,540);
  x = width;
  y = height/ 2;
  counter = counter2 = 0;
  color1 = color('#66ccff');
  color2 = color('#c29aca');
  cloud1 = new Cloud();
  cloud2 = new Cloud();
  cloud3 = new Cloud();
  cloud4 = new Cloud();
  cloud5 = new Cloud();
  cloud6 = new Cloud();
  angle = 0;
  angle2 = 0;
  start = 0;
  background('white');
  noStroke();
  cursor(CROSS);
  socket = io(SOCKET_URL + TEAM_NAME);
  socket.on('bullet', addBullet);
  socket.on('add', addPlane);
  socket.on('remove', removePlane);
  socket.on('score', function(score) {
	counter=score;
  });
  random2 = getRandomImage(images);
  bang = loadSound('assets/boom.mp3');
  
}

function draw() {
  setGradient(0, 0, width, height, color1, color2, Y_AXIS); 
  for (var i=0; i<bullets.length; ++i) {
    image(img2,bullets[i].x-img2.width/20,bullets[i].y-img2.height/20, img2.width/10, img2.height/10);
}
  if (start === 0) {
  image(img9,width/3.5, height/3, 400, 150);
  textAlign(CENTER);
  fill('#ffffff');
  textSize(40);
  text("Press Enter to join game",width/2,height-height/3);
  }
  else {
  cloud1.move();
  cloud1.display();
  cloud2.move();
  cloud2.display();
  cloud3.move();
  cloud3.display();
   for (var i =0; i<planes.length; i++) {
   planes[i].move();
   planes[i].display();
  }
  cloud4.move();
  cloud4.display();
  cloud5.move();
  cloud5.display();
  cloud6.move();
  cloud6.display();
  image(img8,0,0,width,height);
  textAlign(CENTER);
  textSize(20);
  fill('#ff0000');
  text("Controls:", width*.15, height/30);
  text("Mouse + Left Click", width*.15, height/30+20);
  text("Press Shift to Add Enemy", width*.15, height/30+40);
  text("Total Score:   "+counter,width*.85,height/30);
  text("Your Score:   "+counter2,width*.85, height/30+20); 
  text("Allies Score:  "+(counter-counter2),width*.85,height/30+40);
  }
 
}

function Plane(x,y) {
  this.x=x;
  this.y=y;
  this.diameter = width / 10;
  this.speed = 3;
  
  this.move = function() {
  if (this.x > width + width/6) {
	this.x = random(-200,-100);
  }
  else {
  this.x = this.x + 10;
  }
  };
  this.display = function() {
    image(img1, this.x, this.y, this.diameter, this.diameter/2);
  };
}

function Cloud() {
  this.x = random(width);
  this.y = random(-100,height-100);
  this.diameter = random(width/5, width/2);
  this.speed = random(3, 8);
  this.random2 = getRandomImage(images);
  
  this.move = function() { 
    if(this.x < -500) {
    this.x = width + random(width/5, width/2);
    this.y = random(-100,height-100);
  }
  
  else {
    this.x = this.x - this.speed;
  }
   
    this.y = this.y;
  };
  
  this.display = function() {
  if(this.x < -500) {
  this.random2 = getRandomImage(images);
    image(this.random2, this.x, this.y, this.diameter, this.diameter/2);
  }
  else {
  image(this.random2, this.x, this.y, this.diameter, this.diameter/2);
  }
  };
  
}

function getRandomImage(array) {
    var num = Math.floor(Math.random() * array.length);
    var img = array[num];
    return img;
}

function setGradient(x, y, w, h, c1, c2, axis) {

  noFill();

  if (axis == Y_AXIS) {  // Top to bottom gradient
    for (var i = y; i <= y+h; i++) {
      var inter = map(i, y, y+h, 0, 1);
      var c = lerpColor(c1, c2, inter);
      stroke(c);
      line(x, i, x+w, i);
    }
  }  
  else if (axis == X_AXIS) {  // Left to right gradient
    for (var i = x; i <= x+w; i++) {
      var inter = map(i, x, x+w, 0, 1);
      var c = lerpColor(c1, c2, inter);
      stroke(c);
      line(i, y, i, y+h);
    }
  }
 }
 
 function getScore () {
	counter = score;
 }
 function keyPressed() {
	if(keyCode == SHIFT) {
		var ranX = -50;
		var ranY = random(height*.1,height*.9);
		planes.push(new Plane (ranX,ranY));
		socket.emit('add',ranX,ranY);
	}
	if (keyCode === ENTER) {
		start = 1;
		song.play();
		loop();
	}
}


function mousePressed() {
	bang.play();
	addBullet(mouseX,mouseY);
	socket.emit('bullet',mouseX,mouseY);
	for (var i=0; i<planes.length; i++) {
		if (dist(mouseX,mouseY, planes[i].x, planes[i].y) <100) {
				planes.splice(i,1);
				socket.emit('remove',i);
				counter++;
				counter2++;
				socket.emit('score',counter);
		}
	}
	
}


function addBullet(x, y, r, g, b) {
  bullets.push({
    x: x,
    y: y
  });

}

function addPlane (x,y) {
	planes.push(new Plane(x,y));

}

function removePlane (i) {
  planes.splice(i,1);
}



