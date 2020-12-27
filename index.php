<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="score.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    
    window.onload = function() {
     
    
        var source = new EventSource("score.php");
        source.onmessage = function(event) {
            // var data = event.data.split('\n');
            var d = JSON.parse(event.data);
            document.getElementById("scoreHome").innerHTML = d.scorehome;
            document.getElementById("scoreAway").innerHTML = d.scoreaway;

              if(d.musik==1){
                var audio = new Audio("NBA_Sound.mp3");
                audio.oncanplay = function() {
                this.play()
                    $.ajax({
                      type: 'POST',
                      url: "form.php",
                      
                  });
                }
              }


              if(d.waktu==1){
                document.getElementById("menit").innerHTML = d.menit;
                document.getElementById("detik").innerHTML = d.detik;
                    var menit = d.menit;
                    var detik= d.detik;
                   
                        if(detik!=0){
                          $.ajax({
                            type: 'POST',
                            url: "waktu.php",
                             });
                        }
                        else if(menit==0 && detik==0){
                          $.ajax({
                            type: 'POST',
                            url: "stop.php",
                             });

                        }
                        else {
                          $.ajax({
                            type: 'POST',
                            url: "detik.php",
                             });

                          $.ajax({
                            type: 'POST',
                            url: "menit.php",
                             });

                        }

                            
                     
                    
                
              }

              
        };

     

     console.log(this.opener, document.referrer);
      this.opener.postMessage("message from page2", document.referrer)
    }

        


        
  
</script>

  </head>
  <body>
  
  <!-- <audio id="my-audio">
  <source src="NBA_Sound.mp3" type="audio/mpeg">

</audio> -->

<div id="scoreBoard">
    
      <div id="scoreTime"><?=date("Y-m-d H:i:s")?></div>
      <div id="scoreHome">0</div>
      <div id="scoreAway">0</div>
      <div id="nameHome">HOME</div>
      <div id="nameAway">AWAY</div>
      <div id="menit" style="color:white">Menit</div>
      <div id="detik" style="color:white">Detik</div>
      
    </div>

    <!-- <script>
window.onload = function() {
      console.log(this.opener, document.referrer);
      this.opener.postMessage("message from page2", document.referrer)
    }
    window.onmessage = function(e) {
      console.log(e.data);
      var audio = new Audio("NBA_Sound.mp3");
      audio.oncanplay = function() {
        this.play()
      }
    }
    </script> -->
  </body>
</html>

<!-- <script type="text/javascript">
function mulai(){
 //MAINKAN SUARA BEL PADA SAAT AWAL
 document.getElementById('suarabel').pause();
 document.getElementById('suarabel').currentTime=0;
 document.getElementById('suarabel').play();
   
 //SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT  
 totalwaktu=document.getElementById('suarabel').duration*1000; }
</script> -->
