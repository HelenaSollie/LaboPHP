<?php

    $todoitems = [
        [
            "content" => "Maak taken PHP en Webtech af",
            "hours" => 7,
            "category" => "School"
        ],
        
        [
            "content" => "Ga 5 km lopen",
            "hours" => 0.5,
            "category" => "Vrije Tijd"
        ],
        
        [
            "content" => "Koop cadeau voor mama",
            "hours" => 1,
            "category" => "Thuis"
        ],

        [
            "content" => "Maak avondeten klaar",
            "hours" => 0.5,
            "category" => "Thuis"
        ],

        [
            "content" => "Maak presentatie Engels",
            "hours" => 2,
            "category" => "School"
        ]
    ];

    

?>


<!DOCTYPE html>
<html lang="en">
   
    <head>
     
     <meta charset="utf-8"> 
     <title>Taak 3</title>
    
    <style>
        
        div  {
            width: 100%;
            padding: 5%;
            background-color: orange;
            color: white;
            font-family: 'Arial', sans-serif;
        }

        .red {
            background-color: red;
        }
        
        .green {
            background-color: darkseagreen;
        }

    </style>

    </head>

    <body>

      <?php foreach ($todoitems as $todo ): ?>
             
             <div <?php if($todo['hours'] > 5): ?> class ="red"
                 <?php endif?>
                 <?php if($todo['hours'] < 1): ?> class="green"
                 <?php endif?> >
             
          
          <h1><?php echo $todo ['content'] ?></h1>
          <h3><?php echo $todo ['hours'] ?></h3>
          <p><?php echo $todo ['category'] ?></p>
          
          
          </div>
           

       
    
        
    <?php endforeach; ?>
        
        
        
    </body>
</html>