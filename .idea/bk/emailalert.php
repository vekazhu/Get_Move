<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

       
        
        <progress value="0" max="30" id="pbar" ></progress>
        <p id="posture">Moving at your desk!</p>
        <p id="counting"><h1>30</h1></p>
         <button id="start" onclick="start_countdown()">Start CountDown</button>
  
        <script type="text/javascript"> 
         var audio = new Audio('assets/sound/Loud_Alarm_Clock_Buzzer.mp3'); 
         function start_countdown(){
            let msg = "Hi";
            let timeSet = [3000,5000,7000];
            let count = 0;
            callAlert("Hello1",3000,"Walking....");
            //callAlert("Hello2",3000,"Running....");
            //callAlert("Hello3",3000,"Moving your leg....");
         }
        function callAlert(msg,time,posture){
            //Display an alert box after 30 seconds (3000 milliseconds):
            var reverse_counter = time/100;
           // setTimeout(function(){ alert(msg); },time);
           
            var downloadTimer = setInterval(function(){
                reverse_counter = reverse_counter -1;
           // document.getElementById("pbar").value = 30 - --reverse_counter;
                if(reverse_counter <= 0){
                    clearInterval(downloadTimer);
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("GET", "email.php");
                    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xmlhttp.send();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        alert(this.responseText);
                    } else {
                    };
                }
                    alert("E-mail sent!");
                    //audio.play();
                }
            document.getElementById("counting").innerHTML= reverse_counter;
            document.getElementById("posture").innerHTML= posture;
           },time);
        }
       

        </script>
        
        
    </body>
</html>
