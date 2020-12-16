<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aisea Tawake's Portfolio</title>
</head>
<body>
<h1>Aisea Tawake's Portfolio</h1>   

<h2>Introduction to Arduino</h2>
<br>
<ul>
 <li><p>Worked with an example robot arduino kit in class, taking a look at the basics/introduction of
    Arduino IDE.</p></li>
 <li><p>Making lights blink, using the blink example code.</p></li>
 <li><p> Seeing results using the serial monitor and serial plotter</p></li>
 </ul>
 <br>
<h2>Circuit 1a</h2>
<ul>
    <li> There are no original extensions to this first circuit that I built.</li>
    <li> utilising codes from SIK_Circuit_1A-Blink. the source code was provided by <a href="https://learn.sparkfun.com/tutorials/sparkfun-inventors-kit-experiment-guide---v40/circuit-1a-blink-an-led">Spark Fun</a>
    </li>
    <li> There were issues that I did run into with my end product like the LED light wasnt blink. So I had to reassess my build and see what had gone wrong with the build.
    Apparently the yellow jumper wire that was connected to the breadboard was sitting in the wrong position, in which I had to correct.</li>
    <li> Reflection: In the code example, digitalWrite (13, High)- turns on the LED while  digitalWrite (13, Low) - turns it "off", which is delayed by 2 seconds (delay(2000)).</li>
    <li> To make it blink faster I can just lower the delay timer of the circuit.</li>
  </ul>
  <br>  
    <video controls>
  <source src="video/c1.mp4" type="video/mp4">
</video>
<br>
<h2> Circuit 1b </h2>
<ul>
  <li> There are no original extensions to: Circuit 1b -Potentiometer </li>
  <li> utilising codes from SIK_Circuit_1b-Potentiometer. The source code was provided by <a href="https://learn.sparkfun.com/tutorials/sparkfun-inventors-kit-experiment-guide---v40/circuit-1b-potentiometer">Spark Fun</a>
   </li>
  <li>  There were issues which resulted in some troubleshooting from myself. I had forgotten to plug in two jumper wires (5v to 5v) and the (GND to GND(+))
  which resulted in the LED not flickering consistently which was a problem when trying to take readings from the serial monitor.</li>
  <li> Differences between the source codes from this circuit from circuit 1a, is that circuit 1b delay is monitored by the potentiometer
  e.g delay(potposition); and the potposition (potentiometer position) is taken from the analog readings: analogRead(A0).
  When turning the dial, the delay is measured from 0 to 1023</li>
</ul>
  <br>
  <video controls>
  <source src="video/c2.mp4" type="video/mp4">
</video>
<br>
<h2> Circuit 1c </h2>
<ul>
  <li> Changes I made to the code was: lowering the threshold to see if the light turned off because in the source code
  the threshhold started at 750, and readings on the serial monitor was peaking at 160s</li>
  <li> utilising code from SIK_Circuit_1c-photoresistor. The source code was provided by <a href="https://learn.sparkfun.com/tutorials/sparkfun-inventors-kit-experiment-guide---v40/circuit-1b-photoresistor"> Spark Fun</a>
  </li>
  <li> This circuit was run during the day, the shadow of my monitor was able to lower light enough to the light sensor to turn it on.
  Bring the light sensor to a bright area of the room managed to turn it off.</li>
  <li> In the video the readings on the serial monitor fluctuated when I moved the arduino because my arm still covered the light sensor which gave low readings at the start.
  </li>
</ul>
<br>
<video controls>
  <source src="video/c3.mp4" type="video/mp4">
</video>
<br>
<h2> Circuit 1d </h2>
<ul>
  <li> There are no original extensions to: Circuit 1d - RGB Night Light</li>
  <li> utilising code from SIK_Circuit_1c-rgb_night_light. The source code was provided by <a href="
  https://learn.sparkfun.com/tutorials/sparkfun-inventors-kit-experiment-guide---v40/circuit-1d-rgb-night-light">Spark Fun</a></li>
  <li> The circuit was run under the presence of artificial light so I need to cover the photoresistor with my hand so to get the RGB light to work</li>
  
</ul>
<br>
<video controls>
  <source src="video/c4.mp4" type="video/mp4">
</video>
<br>
<h2> Circuit 2a</h2>
<ul>
  <li> There are no original extensions to: Circuit 2a - Buzzer</li>
  <li> utilising code from SIK_Circuit_1c-buzzer. The source code was provided by <a href="
  https://learn.sparkfun.com/tutorials/sparkfun-inventors-kit-experiment-guide---v40/circuit-2a-buzzer">Spark Fun</a></li>
  <li> Reflections: most problems that I encounted with building this circuit was forgeting to attach the appropriate jumper wires so when I tempered with the volume
  there was noticable changes to the volume</li>
  
</ul>
<br>
<video controls>
  <source src="video/c5.mp4" type="video/mp4">
</video>
<br>
<h2> Circuit 2b</h2>
<ul>
  <li> There are no original extensions to: Circuit 2b - Digital Trumpet</li>
  <li> utilising code from SIK_Circuit_1c-digital_trumpet. The source code was provided by <a href="
  https://learn.sparkfun.com/tutorials/sparkfun-inventors-kit-experiment-guide---v40/circuit-2b-digital-trumpet">Spark Fun</a></li>
  <li> There were no needed changes that could have improved the experience of the buzzer circuit.</li>
</ul>
<br>
<video controls>
  <source src="video/c6.mp4" type="video/mp4">
</video>
<br>
<!-- Missing the 2c circuit, need to redo and record because the previous video cannot be uploaded to kate -->
<br>
<h2> Circuit 3a</h2>
<ul>
  <li> There are no original extensions to: Circuit 3a - Servo Motors</li>
  <li> utilising code from SIK_Circuit_1c-servo_motors. The source code was provided by <a href="
  https://learn.sparkfun.com/tutorials/sparkfun-inventors-kit-experiment-guide---v40/circuit-3a-servo-motors">Spark Fun</a></li>
  <li> There were no needed changes that could have improved the experience of the buzzer circuit.</li>
</ul>
<br>
<video controls>
  <source src="video/c8.mp4" type="video/mp4">
</video>
<br>
<h2> Circuit 3b</h2>
<ul>
  <li> There are a few changes that I made to the logical coding of: Circuit 3b - Distance Sensor</li>
  <li> utilising code from SIK_Circuit_1c-distance_sensor. The source code was provided by <a href="
  https://learn.sparkfun.com/tutorials/sparkfun-inventors-kit-experiment-guide---v40/circuit-3b-distance-sensor">Spark Fun</a></li>
  <li> I had made change to the three if statements provide. if( distance <= 5){ turn the rgb red}; else if( distance >= 10 && distance <= 20){ turn the
  rgb light yellow}; else if(distance is more than 20){ turn the rgb light green}.</li>
  <li> Reflection: I did it this way because it looked more logical to me than the default coding provided</li>
</ul>
<br>
<video controls>
  <source src="video/c9.mp4" type="video/mp4">
</video>
<br>
<h2> Circuit 3c</h2>
<ul>
  <li> There are a few changes that I made to the logical coding of: Circuit 3c - Motion Alarm</li>
  <li> utilising code from SIK_Circuit_1c-motion_alarm. The source code was provided by <a href="
  https://learn.sparkfun.com/tutorials/sparkfun-inventors-kit-experiment-guide---v40/circuit-3c-motion-alarm">Spark Fun</a></li>
  <li> I had made change to the three if statements provide. if( distance <= 10){ turn the rgb red, sound the alarm and run the motor}; else if( distance >= 10 && distance <= 20){ turn the
  rgb light yellow}; else if(distance is more than 20){ turn the rgb light green}.</li>
  <li> Reflection: I did similar changes here as the circuit done before (Circuit 3b - ). The only change was rather than having the first if statement (if(distance <= 5)), I had if(distance <= 10)
  {light red, sound the alarm and run the motor}</li>
</ul>
<br>
<video controls>
  <source src="video/c10.mp4" type="video/mp4">
</video>
<br>
</body>
<footer> Aisea Tawake's Portfolio 2019 © </footer>
</html>