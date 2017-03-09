
<style>
    header {
        padding: 5%;
        background-color: orange;
        color: white;
        
    }
    
    .Swarm_Profile {
        display: flex;
        flex-direction: row;
    }
    .Swarm_Profile h4 {
        font-family: 'Arial', sans-serif;
        font-size: 2em;
        margin-left: 5%;
    }
    
    .Swarm_Profile img {
        width: 100px;
        height: 100px;
        border-radius: 80px;
        border-color: white;
        border-style: solid;
        border-width: 3px;
    }
    
</style>
     
     
    <?php 

    // PROFILE

    $profile = "Helena";
    $profilephoto = "https://pbs.twimg.com/profile_images/829730268714041344/fJdL6PTv_400x400.jpg";

    ?>
     
<header>
   
    <div class="Swarm_Profile">
        <img src="<?php echo $profilephoto ?>">
        <h4>in Mechelen</h4> 
    </div>   
</header>



