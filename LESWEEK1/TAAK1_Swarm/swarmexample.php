<?php


    // CHECK-INS SWARM

    $checkins = [
        
        [
        "avatar" => "https://scontent-fra3-1.xx.fbcdn.net/v/t1.0-1/p160x160/16114607_1590021327681003_6114377632962988878_n.jpg?oh=3aa0ca1cd3e62b1213e5cdb51103776c&oe=5949F620",
        "name" => "Simon",
        "place" => "Boesj",
        "citycountry" => "Mechelen, Belgium",
        "distance" => 2,
        "photo" => "http://68.media.tumblr.com/736f7b35c1669dc9960295e7a1857b30/tumblr_inline_nf1e859aNr1t0xy5p.jpg"
        ],
        
         [
        "avatar" => "https://pbs.twimg.com/profile_images/696700723363516420/LbT9JApx_400x400.jpg",
        "name" => "Caroline",
        "place" => "Shoppingcentrum",
        "citycountry" => "Waasland, Belgium",
        "distance" => 15,
        "photo" => ""
        ],
        
         [
        "avatar" => "https://pbs.twimg.com/profile_images/818206763191324673/WWw0GZ4P_400x400.jpg",
        "name" => "Matthias",
        "place" => "Borrel en Babbel",
        "citycountry" => "Mechelen, Belgium",
        "distance" => 3,
        "photo" => ""
        ],
        
        
    ]; 

   

    // CONSTANTE

    const DISTANCE_POST = 0;       


?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"> 
        <title>Document</title>  
       
               <style>
        
               .Swarm_Post {
               display: flex;
               flex-direction: row;
               padding: 5%;
               }
           
               .Swarm_Post img {
               width: 200px;
               height: 200px;
               border-radius: 100px;
               }
           
               .Swarm_Post h1 {
               
               margin-left: 10%;
               color: grey;
               font-family: 'Arial', sans-serif;
               font-size: 1.2em;
               }
           
               .Place_Post h2 {
               
               margin-top: 40%;
               margin-left: -30%;
               color: darkorange;
               font-size: 1.8em;
               }
           
               .Place_Post h3 {
               margin-top: -5%;
               margin-left: -30%;
               color: darkgrey;
               font-size: 1.4em;
               }
           
                
                .Photo_Post img {
                        
                        margin-left: 30%;
                        border-radius: 10px;
                   }
                   
                   .Distance_Post p {
                       font-family: 'Arial', sans-serif;
                       font-size: 1.2em;
                       color: coral;
                       text-align: center;
                       width: 10%;
                       padding: 2%;
                       margin-left: 10%;
                       border: solid 2px grey;
                       border-radius: 20px;
                   }
        
                   
            
           
           
        
    </style>
        
    </head>
    <body>
       
           <?php include("header.swarm.php"); ?>
        
        
            <?php foreach ($checkins as $checkin ): ?>
            
            <div class="Swarm_Post">
                     
                     <img src="<?php echo $checkin ['avatar'] ?>">
                     <h1> <?php echo $checkin ['name'] ?> </h1>

                     <div class="Place_Post">

                     <h2> <?php echo $checkin ['place'] ?> </h2>
                     <h3><?php echo $checkin ['citycountry'] ?> </h3> 
                     
                     </div>
            </div>
            
            <div class="Distance_Post">
                <p>
                <?php
    
                if (($checkin ['distance'] - DISTANCE_POST) <= 7) {
                    echo ("Dicht bij!");
                } else {
                    echo ("Ver weg...");
                }
    ?>
               </p>
                
            </div>
            
            <div class="Photo_Post">
                     <img src="<?php if (!empty ($checkin['photo'])) {
    echo $checkin['photo'];
} ?>">
            </div>
            
            
            
            
            <?php endforeach; ?>
        
        <?php include ("footer.swarm.php"); ?>
        
        
        
    </body>
</html>