<!doctype html>
<html lang="en">
<head>
    <title>Rivelatore.ino</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/stile.css" type="text/css">
</head>

<body>
<p><a href="intervallometro.php">Torna indietro</a></p>
<xmp>
//pinout settings
#define DB0 8
#define DB1 5
#define DB2 6
#define DB3 7

#define dig_2 11
#define dig_1 10
#define dig_0 9

#define dot 4
#define focus 12
#define shutter 13
#define button 3 
#define pot 0

#define blink_every 2000 //milliseconds

//an array with the binary informations for the 7 segments driver
boolean bits[3][4] = {{false, false, false, false}, {false, false, false, false}, {false, false, false, false}};

//variables declarations
int interval, n_photo = 0;
unsigned long int old_millis, time_for_blink;

void setup() {
  //set data pin to output
  pinMode(DB0, OUTPUT);
  pinMode(DB1, OUTPUT);
  pinMode(DB2, OUTPUT);
  pinMode(DB3, OUTPUT);
  
  //set transistor pin to output
  pinMode(dig_2, OUTPUT);
  pinMode(dig_1, OUTPUT);
  pinMode(dig_0, OUTPUT);
  
  pinMode(dot, OUTPUT);
  pinMode(focus, OUTPUT);
  pinMode(shutter, OUTPUT);
  pinMode(button, INPUT);
  
  //turn off displays
  digitalWrite(dig_2, LOW);
  digitalWrite(dig_1, LOW);
  digitalWrite(dig_0, LOW);
  
  //set optocouplers ready
  digitalWrite(focus, LOW);
  digitalWrite(shutter, LOW);
  
  //turn off the dot LED (5v on common anode and 5v on kathode)
  digitalWrite(dot, HIGH);
  
  //adjust the time interval using the pot, press the button and go on
  while(digitalRead(button) == 0){
    interval = map(analogRead(pot), 0, 1023, 1, 50);
    show(interval);
  }
  delay(500);
  old_millis = millis();
  time_for_blink = millis();
}

void loop(){
  //wait for the next photo
  if((millis() - old_millis) >= (interval * 1000)){
    old_millis = millis();
    takePhoto();
    n_photo++;
  }
  
  if(millis()-time_for_blink >= blink_every){
    blinkDot();
    time_for_blink = millis();
  }
  
  //show n_photo when button is pressed
  if(digitalRead(button) == HIGH){
    show(n_photo);
  }
}

//show digits on the displays
void show(int value){
  int digit2 = value / 100;
  int digit1 = value / 10 - (digit2 * 10);
  int digit0 = value - (digit2 * 100 + digit1 * 10);
  
  for(int i=0; i<4; i++){bits[0][i] = bitRead(digit2, i);}
  for(int i=0; i<4; i++){bits[1][i] = bitRead(digit1, i);}
  for(int i=0; i<4; i++){bits[2][i] = bitRead(digit0, i);}
  
  setPin();
}

//set pin values according to the array informations
void setPin(){
  unsigned long int prev_millis = millis();
  digitalWrite(dig_0, HIGH);
  digitalWrite(DB0, bits[2][0]);
  digitalWrite(DB1, bits[2][1]);
  digitalWrite(DB2, bits[2][2]);
  digitalWrite(DB3, bits[2][3]);
  delay(1);
  digitalWrite(dig_0, LOW);
  
  digitalWrite(dig_1, HIGH);
  digitalWrite(DB0, bits[1][0]);
  digitalWrite(DB1, bits[1][1]);
  digitalWrite(DB2, bits[1][2]);
  digitalWrite(DB3, bits[1][3]);
  delay(1);
  digitalWrite(dig_1, LOW);
  
  digitalWrite(dig_2, HIGH);
  digitalWrite(DB0, bits[0][0]);
  digitalWrite(DB1, bits[0][1]);
  digitalWrite(DB2, bits[0][2]);
  digitalWrite(DB3, bits[0][3]);
  delay(1);
  digitalWrite(dig_2, LOW);
}

//take a photo
void takePhoto(){
  digitalWrite(focus, HIGH);
  digitalWrite(shutter, HIGH);
  delay(200);
  digitalWrite(shutter, LOW);
  digitalWrite(focus, LOW);
}

//blinking led state
void blinkDot(){
  digitalWrite(DB0, HIGH);
  digitalWrite(DB1, HIGH);
  digitalWrite(DB2, HIGH);
  digitalWrite(DB3, HIGH);
  
  digitalWrite(dig_1, HIGH);
  digitalWrite(dot, LOW);
  delay(2);
  digitalWrite(dig_1, LOW);
  digitalWrite(dot, HIGH);
}</xmp>
</body>