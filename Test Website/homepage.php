<?php
    $message = '';
    include('loginFunction.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <link href="Threeregion%20Layout.css" rel="stylesheet" type="text/css" />
        <title>Games HomePage</title>
    </head>

    <body>
        <div id="sidenavigation">
            <img src="http://www.julieferwerda.com/files/Journal_2010/kite2.jpg" alt="I bulk things out">
            
            <div class="sidenavigationlink">
                <a href="hangMan.php">Hang man</a>
            </div>
            
            <div class="sidenavigationlink">
                <a href="mathGame.php">Math Game</a>
            </div>
        </div>   

        <div id="navigationbar">
            <table>
                <tr> 
                    <a href="HomePage.php">
                        <img src="http://s.holmesplace.com/files/f/0/f04aa5_cologne_1_jacuzzi00_banner.jpg_1600x200_fc_.jpg" alt="Top Bar banner">
                    </a>            
                </tr>
                <tr>
                    <span class="topnavigationlink">
                        <a href="HomePage.php">Home</a>
                    </span>
                    
                     <span class="topnavigationlink">
                        <a href="LoginPage.php">Log out</a>
                    </span>
                </tr>
            </table>
        </div>
        
        <div id="content">            
            <h1>Games!!!</h1>

            <h2>Hang man</h2>
            <p>A word will be randomly selected and the user must type in their guess into the text box.</br> If they are correct the letters will display on the empty spaces.                 If they are incorrect an </br>image of the hangmans noose will start to draw itself.The user has 10 chances before its game over.</p>

            <h2>Maths Game</h2>
            <p>This is a game that is designed to test your mathematic ability to the absurd. How will you fair?</p>
        </div>
    </body>
</html>