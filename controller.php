<?php


// controller scorehome
    if(isset($_POST['plus1'])) {  
    
    $koneksi=mysqli_connect('localhost','root','','score') ; 
    $query=mysqli_query($koneksi, "UPDATE score set scorehome=scorehome+1 where id=1");
    }
    
    if(isset($_POST['minus1'])) {
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set scorehome=scorehome-1 where id=1");
    
    }

    if(isset($_POST['plus2'])) {
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set scorehome=scorehome+2 where id=1");
    
    }

    if(isset($_POST['minus2'])) {
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set scorehome=scorehome-2 where id=1");
    
    }

    if(isset($_POST['plus3'])) {
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set scorehome=scorehome+3 where id=1");
    
    }

    if(isset($_POST['minus3'])) {
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set scorehome=scorehome-3 where id=1");
    
    }
//contoler scoreaway
         if(isset($_POST['plusaway1'])) {  
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set scoreaway=scoreaway+1 where id=1");
        }
        
        if(isset($_POST['minusaway1'])) {
        
            $koneksi=mysqli_connect('localhost','root','','score') ; 
            $query=mysqli_query($koneksi, "UPDATE score set scoreaway=scoreaway-1 where id=1");
        
        }
    
        if(isset($_POST['plusaway2'])) {
        
            $koneksi=mysqli_connect('localhost','root','','score') ; 
            $query=mysqli_query($koneksi, "UPDATE score set scoreaway=scoreaway+2 where id=1");
        
        }
    
        if(isset($_POST['minusaway2'])) {
        
            $koneksi=mysqli_connect('localhost','root','','score') ; 
            $query=mysqli_query($koneksi, "UPDATE score set scoreaway=scoreaway-2 where id=1");
        
        }
    
        if(isset($_POST['plusaway3'])) {
        
            $koneksi=mysqli_connect('localhost','root','','score') ; 
            $query=mysqli_query($koneksi, "UPDATE score set scoreaway=scoreaway+3 where id=1");
        
        }
    
        if(isset($_POST['minusaway3'])) {
        
            $koneksi=mysqli_connect('localhost','root','','score') ; 
            $query=mysqli_query($koneksi, "UPDATE score set scoreaway=scoreaway-3 where id=1");
        
        }

    if(isset($_POST['play'])) {
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set musik=1 where id=1");
    
    }

    if(isset($_POST['startwatch10'])) {
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set menit=10,detik=0,waktu=1 where id=1");
    
    }

    if(isset($_POST['startwatch'])) {
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set waktu=1 where id=1");
    
    }

    if(isset($_POST['stopwatch'])) {
    
        $koneksi=mysqli_connect('localhost','root','','score') ; 
        $query=mysqli_query($koneksi, "UPDATE score set waktu=0 where id=1");
    
    }
?>
<html>
<head>
<title>pengendalian pertandingan</title>
<link rel="stylesheet" href="admin.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
   
   
</style>

</head>
<body style="margin:auto; width:50%; padding:5px"> 
<form id="namahome" action="" method="post" >
    <label>masukkan nama untuk tuan rumah (HOME) :</label>
      <input type="text" name="hometext" style="margin-left:10px"/>
      <button class="btn btn-success" type="submit" name="home" style="margin-left:10px" >submit</button>
</form>

<form method="post" action="input_away.php">
    <span>masukkan nama untuk lawan (AWAY):</span>
      <input type="text" name="away" id="away" style="margin-left:60px"/>
      <button class="btn btn-success" type="submit" name="away" style="margin-left:10px">submit</button>
</form>
<!-- controller home -->

        <div style="width:100%">
        <h3>Controller Home</h3>
            <div style="width:30%;float:left">
            <form action="controller.php" id="scoreplus" method="post" >
                <button class="btn btn-primary" type="submit" name="plus1">+1home</button>
            </form>
            </div>

            <div style="width:35%;float:left">
            <form action="controller.php" id="scoreplus" method="post" >
                <button class="btn btn-primary" type="submit" name="plus2">+2home</button>
            </form>
            </div>

            <div style="width:35%;float:left">
            <form action="controller.php" id="scoreplus" method="post" >
                <button class="btn btn-primary" type="submit" name="plus3">+3home</button>
            </form>
            </div>

            <div style="width:30%;float:left" >
            <form action="controller.php" id="scoreminus" method="post" >
                <button class="btn btn-danger" type="submit" name="minus1">-1home</button>
            </form>
            </div>

            <div style="width:35%;float:left" >
            <form action="controller.php" id="scoreminus" method="post" >
                <button class="btn btn-danger" type="submit" name="minus2">-2home</button>
            </form>
            </div>

            <div style="width:35%;float:left" >
            <form action="controller.php" id="scoreminus" method="post" >
                <button class="btn btn-danger" type="submit" name="minus3">-3home</button>
            </form>
            </div>
        </div>


<!-- controller away -->
        <div style="width:100%">
        <h3>Controller Away</h3>
            <div style="width:30%;float:left">
            <form action="controller.php" id="scoreplus" method="post" >
                <button class="btn btn-primary" type="submit" name="plusaway1">+1home</button>
            </form>
            </div>

            <div style="width:35%;float:left">
            <form action="controller.php" id="scoreplus" method="post" >
                <button class="btn btn-primary" type="submit" name="plusaway2">+2home</button>
            </form>
            </div>

            <div style="width:35%;float:left">
            <form action="controller.php" id="scoreplus" method="post" >
                <button class="btn btn-primary" type="submit" name="plusaway3">+3home</button>
            </form>
            </div>

            <div style="width:30%;float:left" >
            <form action="controller.php" id="scoreminus" method="post" >
                <button class="btn btn-danger" type="submit" name="minusaway1">-1home</button>
            </form>
            </div>

            <div style="width:35%;float:left" >
            <form action="controller.php" id="scoreminus" method="post" >
                <button class="btn btn-danger" type="submit" name="minusaway2">-2home</button>
            </form>
            </div>

            <div style="width:35%;float:left" >
            <form action="controller.php" id="scoreminus" method="post" >
                <button class="btn btn-danger" type="submit" name="minusaway3">-3home</button>
            </form>
            </div>
        </div>

        <div style="width:100%">
        <h3>Controller Music</h3>
        <form action="controller.php"  method="post" >
        
            <button class="btn btn-success" type="submit" name="play">Play Music</button>
        </form>
        <!-- <form action="update.php"  method="post" >
                 <button class="minhome" type="submit" name="stop">stop musik</button>
            </form> -->
        </div>

        <div style="width:100%">
        <h3>Controller Stopwatch</h3>
            <div style="width:35%;float:left" >
            <form action="controller.php"  method="post">
                <button class="btn btn-secondary" type="submit" name="startwatch10">Reset Stopwatch 10:menit</button>
            </form>
            </div>

            <div style="width:25%;float:left;" >
            <form action="controller.php"  method="post">
                <button class="btn btn-success" type="submit" name="startwatch">Play Stopwatch</button>
            </form>
            </div>
            
            <div style="width:30%;float:left" >
            <form action="controller.php"  method="post">
                <button class="btn btn-danger" type="submit" name="stopwatch">Stop Stopwatch</button>
            </form>
            </div>
        </div>
        
<!-- <button class="a">Music</button> -->
        <div style="width:100%">
                <h3>Controller New Page</h3>
        <a href="index.php" class="btn btn-secondary" target="_blank">Open Page2</a>
        </div>
<!-- <script>
    var src;
      document.querySelector(".a").onclick = function() {
        src.postMessage("clicked", src.location.href)
      }
      window.onmessage = function(e) {
        console.log(e.data);
        src = e.source;
      }
</script> -->

</body>

</html>
