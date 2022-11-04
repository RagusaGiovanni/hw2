<?php
session_start();
if(!isset($_SESSION["LeCar_User"]))
{
    header("Location:login.php");
    exit;

}

?>
   <?php session_destroy(); ?>
 <!DOCTYPE html>
 <html lang="it">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Contenuti Dinamici</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 </head>
 <body id="backend">
   <header class="header header-backend">
     <div id="menuToggle">
       <input type="checkbox" />
       <span></span>
       <span></span>
       <span></span>
       <div class="sidebar">
        <img id="iconaUser" src="<?php echo'data:image/jpg;base64,'.base64_encode($riga2['user_img']).''?>" alt="">
         <h3>Benvenuto <br /><?php echo''.$riga2['user'].'' ?></h3>
         <h1>Dashboard</h1>
         <form action="upload.php" method="post" enctype="multipart/form-data">
           <div class="container-itemsMenu">
             <h4>Gestione Menu</h4>
             <p><input class="input" type="text" name="Prima_voce" value="<?php echo''.$riga['Prima_voce'].'' ?>"></p>
             <p><input class="input" type="text" name="Seconda_voce" value="<?php echo''.$riga['Seconda_voce'].'' ?>"></p>
             <p><input class="input" type="text" name="Terza_voce" value="<?php echo''.$riga['Terza_voce'].'' ?>"></p>
             <p><input class="input" type="text" name="Quarta_voce" value="<?php echo''.$riga['Quarta_voce'].'' ?>"></p>
           </div>
           <div class="container-itemsImg">
             <h4>Gestione Cover</h4>
             <img id="cover" src="<?php echo'data:image/jpg;base64,'.base64_encode($riga1['cover_img'] ).'' ?>" alt="">
             <label for="cover_img" title="Carica un&rsquo; immagine per la tua cover">
               <a id="addImg" class="material-symbols-outlined">add_a_photo</a>
             </label>
             <input id="cover_img" class="img" type="file" name="cover_img" set-to="cover_img" />
           </div>
           <ul>
             <li><a href="#" onclick="gestisciImg(), rimuovigestisciMenu();" title="Gestisci Immagini"><div class="material-symbols-outlined icone">photo_library</div><h3 style="top:233px;">Cover</h3></a></li>
             <li><a href="#" onclick="gestisciMenu(), rimuovigestisciImg();"title="Gestisci menu"><div class="material-symbols-outlined icone-menu">list</div><h3 style="top:284px;">Menu</h3></a></li>
           </ul>
       </div>
     </div>
     <div class="pulsanti">
       <button class="pulsante" type="submit">Salva Modifiche</button>
       <button class="pulsante pulsante-logout" type="button" name="logout"><a href="logout.php">Logout</a></button>
     </div>
     </form>
   </header>
   <script>
   function gestisciImg() {
       $('.container-itemsImg').toggleClass('comparsa');
     }
     function gestisciMenu() {
       $('.container-itemsMenu').toggleClass('comparsa');
     }
     function rimuovigestisciImg() {
       $('.container-itemsImg').removeClass('comparsa');
     }
       function rimuovigestisciMenu() {
         $('.container-itemsMenu').removeClass('comparsa');
       }
   </script>
 </body>
 </html>

