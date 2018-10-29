#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h> 
 
//Access point credentials
const char* ssid = "ice&andf";
const char* pwd = "0934585191";
const char* host = "http://192.168.1.36";
String get_host = "http://192.168.1.36";
 
WiFiServer server(80);  // open port 80 for server connection
 
void setup() 
{
  Serial.begin(115200); //initialise the serial communication
  delay(20);
  
  WiFi.begin(ssid, pwd);
  pinMode (D2 , OUTPUT);
   
    //starting the server
    server.begin();
 
}
 
void loop()
{
  
    WiFiClient client = server.available();
 
        HTTPClient http;
        String url = "http://192.168.1.36/arduino.php?test=1";
        
        http.begin(url);
       
        //GET method
        int httpCode = http.GET();
        String payload = http.getString();
        Serial.println(payload);
        if(payload=="1")
        {
          Serial.println("ON");
          digitalWrite(D2,LOW);
        }
        else
        {
          Serial.println("Off");
          digitalWrite(D2,HIGH);
          }
        http.end();
        delay(1000);
 
       
}
 

 
