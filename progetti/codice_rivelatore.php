<!doctype html>
<html lang="en">
<head>
    <title>Rivelatore.ino</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/stile.css" type="text/css">
</head>

<body>
<a href="rivelatore.php"><< Torna indietro</a>
</br>
</br>
<xmp>
/*******************************************************************************
 *                        RIVELATORE DI MUONI OPEN SOURCE                      *
 *******************************************************************************/
    
//Cacciotti Federico

//includo le librerie utili alla comunicazione tra il microcontrollore e i dispositivi
#include <Wire.h>  
#include <SD.h>
#include <SPI.h>  
#include <LiquidCrystal.h>
#include "RTClib.h"
 
 
//inizializzo l'orologio RTC
RTC_DS1307 RTC;

//intervallo di misura espresso in minuti
int intervallo = 10; 
int fine_intervallo;

//creo la connessione per l'LCD
LiquidCrystal lcd(9, 8, 7, 6, 5, 4);  

//assegno ad arduino il pin 10 al pin CS dell'sd
const int CS = 10; 

//inizializzo la classe File 
File documento;

//contatore muoni
int contatore = 0, eventi = 0;
volatile boolean stato = true, vecchio_stato = true;




void setup(){
  //inizializzo la connessione i2c con l'RTC
  Wire.begin();
  RTC.begin();
  
  //inizializzo il display
  lcd.begin(16, 2);
  
  //controllo se l'rtc è funzionante e sincronizzato con l'ora reale
  if(!RTC.isrunning()) {
    lcd.print(" RTC: resettato"); 
    
    //imposto la data e l'ora della compilazione dello sketch
    RTC.adjust(DateTime(__DATE__, __TIME__));
  } else {
    lcd.print("RTC: OK!");
  }
  lcd.setCursor(0,1);
  
  DateTime now = RTC.now();
  DateTime future(now.unixtime() + intervallo*60);
  
  //controllo la presenza di una scheda sd e creo il file txt su cui memorizzare i dati
  if(!SD.begin(CS)){
    lcd.print("SD: assente!");
  } else{
    lcd.print("SD: OK!");
    documento = SD.open("log.txt", FILE_WRITE); 
    if(documento) {
      documento.print("Test iniziato il ");
      documento.print(now.day(), DEC);
      documento.print("/");
      documento.print(now.month(), DEC);
      documento.print("/");
      documento.print(now.year(), DEC);
      documento.print(" alle ore ");
      documento.print(now.hour(), DEC);
      documento.print(":");
      documento.print(now.minute(), DEC);
      documento.print(":");
      documento.print(now.second(), DEC);
      documento.println(" ");
      documento.close();
    }
  }
  delay(2000);
  lcd.clear();
  lcd.setCursor(0,0);
  
  //imposto il tempo di fine intervallo
  fine_intervallo = future.minute();
  
  //interrupt per rivelazione muone
  attachInterrupt(0, muon, FALLING);
}





void loop(){
  lcd.clear();
  lcd.print("E: ");
  lcd.print(eventi);
  lcd.print(" ");
  lcd.print((char)B11100100);
  lcd.print(": ");
  lcd.print(contatore);
  
  DateTime now = RTC.now();
  if(stato!=vecchio_stato){
    vecchio_stato = !vecchio_stato;
    contatore++;
    eventi++;
  }
  if(fine_intervallo == now.minute()){
    DateTime future(now.unixtime() + intervallo*60);
    fine_intervallo = future.minute();
    scrivi_sd();
    eventi = 0;
  }
  time();
  
  //aggiorno il display ogni secondo
  delay(1000);
}




//ISR
void muon(){
  stato = !stato;
}





//scrivo la data e l'ora sul display LCD
void time(){
  lcd.setCursor(0, 1);
  DateTime now = RTC.now();
  lcd.print(now.hour(), DEC);
  lcd.print(":");
  lcd.print(now.minute(), DEC);
  lcd.print(" ");
  lcd.print(now.day());
  lcd.print("/");
  lcd.print(now.month(), DEC);
  lcd.print("/");
  lcd.print(now.year(), DEC);
  
  lcd.setCursor(0, 0);
}





//funzione per la scrittura su sd: "
// Esempio: "Dal: DD/MM/YYYY HH:MM:SS al: DD/MM/YYYY HH:MM:SS contatore: X"
void scrivi_sd(){
  DateTime now = RTC.now();
  documento = SD.open("log.txt", FILE_WRITE);
  if(documento) {
      DateTime past(now.unixtime() - intervallo*60);
      documento.print("Dal: ");
      documento.print(past.day(), DEC);
      documento.print("/");
      documento.print(past.month(), DEC);
      documento.print("/");
      documento.print(past.year(), DEC);
      documento.print(" ");
      documento.print(past.hour(), DEC);
      documento.print(":");
      documento.print(past.minute(), DEC);
      documento.print(":");
      documento.print(past.second(), DEC);
      documento.print(" al ");
      
      documento.print(now.day(), DEC);
      documento.print("/");
      documento.print(now.month(), DEC);
      documento.print("/");
      documento.print(now.year(), DEC);
      documento.print(" ");
      documento.print(now.hour(), DEC);
      documento.print(":");
      documento.print(now.minute(), DEC);
      documento.print(":");
      documento.print(now.second(), DEC);
      
      documento.print(" eventi: ");
      documento.println(eventi);
      documento.close();
    }
}
</xmp>
<?php include("../include/cookie.html"); ?>
</body>
</html>