var plane,enemy,system;
var d1,d2;
var angle,angle2;
var cloud1,cloud2,clou3,cloud4,cloud5,cloud6,cloud7
var speed;
var x,y;
var images;
var random2;
var missiles, enemies;
var song, bang, boom;
var color1, color2; 
var Y_AXIS = 1;

function preload() {
  img = loadImage("assets/plane.png");
  img1 = loadImage("assets/cloud1.png");
  img2 = loadImage("assets/cloud2.png");
  img3 = loadImage("assets/cloud3.png");
  img4 = loadImage("assets/cloud4.png");
  images = [img1, img2, img3, img4];
  img6 = loadImage("assets/enemyPlane.png");
  missileImg = loadImage("assets/missile.png");
  soundFormats('mp3');
  song = loadSound('assets/8bit_get_lucky.mp3');
}

function setup() { 
  song.play();
  createCanvas(windowWidth, windowHeight);
  // Create object
  x = width;
  y = height/ 2;
  //Background gradient colors
  color1 = color('#66ccff');
  color2 = color('#c29aca');
  plane = createSprite(width/5,height/2);
  plane.setCollider("circle",0,0,plane.height);
  plane.addImage(img);
  plane.scale=0.2;
  
  system = new ParticleSystem(createVector(width/6,y));
  cloud1 = new Cloud();
  cloud2 = new Cloud();
  cloud3 = new Cloud();
  cloud4 = new Cloud();

  
  //Adding in MP3 for gun shot

  bang = loadSound('assets/bang.mp3');
  boom = loadSound('assets/boom.mp3');

  angle = 0;
  angle2 = 0;
  random2 = getRandomImage(images);
  noCursor();
  missiles = new Group();
  enemies = new Group();
  for (var i = 0; i<6; i++) {
	var px = random(width,width*2);
	var py = random(height);
	createEnemy(px,py);
  }
}


function draw() {
  // Old Sky color- background('#66ccff');
  //New gradient background below, source here- http://p5js.org/examples/examples/Color_Linear_Gradient.php
  setGradient(0, 0, width, height, color1, color2, Y_AXIS);
  textAlign(CENTER);
  textSize(20);
  fill('#000000');
  text("Controls: Mouse + Left Click", width/2, height-height/30); 
  cloud1.move();
  cloud1.display();
  cloud2.move();
  cloud2.display();
  cloud3.move();
  cloud3.display();
  cloud4.move();
  cloud4.display();

  plane.position.y = mouseY;
  system.addParticle();
  system.run();
  
  if (frameCount % 200 == 0) {
    for (var i = 0; i<4; i++) {
	var px = random(width*2,width*4);
	var py = random(height);
	createEnemy(px,py);
	}
  }
  
  enemies.overlap(missiles, enemyHit);
  
  enemies.overlap(plane, planeHit);

  if (mouseIsPressed && mouseButton == LEFT) {
    var missile=createSprite(plane.position.x*2,plane.position.y+height/60,40,40);
    missile.addImage(missileImg);
    missile.setSpeed(60,0);
	missile.scale=0.25;
    missile.life = 30;
    missiles.add(missile);
    bang.play();
  }
  
  drawSprites();
}

// Cloud class
function Cloud() {
  this.x = random(width);
  this.y = random(height);
  this.diameter = random(width/5, width/2);
  this.speed = random(3, 10);
  this.random2 = getRandomImage(images);
  
  this.move = function() { 
    if(this.x < -1000) {
    this.x = width + random(width/5, width/2);
    this.y = random(height);
  }
  else {
    this.x = this.x - this.speed;
  }
   
    this.y = this.y;
  };
  
  this.display = function() {
  if(this.x < -1000) {
  this.random2 = getRandomImage(images);
    image(this.random2, this.x, this.y, this.diameter, this.diameter/2);
  }
  else {
  image(this.random2, this.x, this.y, this.diameter, this.diameter/2);
  }
  };
  
}
  
// Particle class
var Particle = function(position) {
  this.acceleration = createVector(0, 0.01);
  this.velocity = createVector(random(-5, -1), random(-1, 1));
  this.position = position.copy();
  this.lifespan = 100.0;
};
Particle.prototype.run = function() {
  this.update();
  this.display();
  
};
// Method to update position
Particle.prototype.update = function(){
 
  this.velocity.add(this.acceleration);
  this.position.add(this.velocity);
  this.lifespan -= 2;
};
// Method to display
Particle.prototype.display = function() {
  stroke(200, this.lifespan);
  strokeWeight(0);
  fill(127, this.lifespan);
  ellipse(this.position.x, this.position.y, 12, 12);
};
// Is the particle still useful?
Particle.prototype.isDead = function(){
  if (this.lifespan < 0) {
    return true;
  } else {
    return false;
  }
};
var ParticleSystem = function(position) {
  this.origin = position.copy();
  this.particles = [];
};
ParticleSystem.prototype.addParticle = function() {
  d2 = mouseY + height/40 + (sin(angle) * this.origin.y/8);
  this.origin.y = d2;
  angle2 += 0.02;
  this.particles.push(new Particle(this.origin));
};
ParticleSystem.prototype.run = function() {
  for (var i = this.particles.length-1; i >= 0; i--) {
    var p = this.particles[i];
    p.run();
    if (p.isDead()) {
      this.particles.splice(i, 1);
    }
  }
};

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

 function createEnemy(x,y) {
	var a=createSprite(x,y);
	a.addAnimation("normal", "assets/enemyPlane.png");
	a.addAnimation("explode", "assets/explode1.png", "assets/explode2.png", "assets/explode3.png", "assets/explode4.png", "assets/explode5.png", "assets/explode6.png");
	a.setSpeed(10, random(165,195));
	a.scale=0.2;
	a.setCollider("circle",0,0,a.width);
	enemies.add(a);
	return a;
}

function enemyHit(enemy,missile) {
	enemy.changeAnimation("explode");
	boom.play();
	missile.remove();
	enemy.life=5;
}

function  planeHit(plane,enemy) {
	plane.remove();
	boom.play();
	textSize(45);
	fill('#ff0000');
	text("GAME OVER", width/2, height/2-30); 
	text("PRESS SHIFT TO CONTINUE", width/2, height/2+30); 
	noLoop();
	cursor(ARROW);
	song.stop();
}

function keyPressed() {
	if(keyCode == SHIFT) {
		loop();
		noCursor();
		song.play();
	}
}
