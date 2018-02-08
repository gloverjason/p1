<!--
    Project 1
    Jason Glover
    CSCI E-15
    2-5-18
-->
<?php require('p1_logic.php'); ?>
<!DOCTYPE html>
<html lang="en">
      
<head>
    <title>Jason Glover</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/p1_styles.css" />
</head>
    
<body>
    <div>
    <header>
        <h1>Jason Glover</h1>
    </header>
    
    <img src="images/jason-project1.JPG" alt="A picture of me"><br/><br/>
    
    <h2>About Me</h2> 
    
    <p>Hi,<br/><br/> My name is Jason Glover. I’m currently pursuing a master’s degree in Digital Media Design. 
    This is my second semester at Harvard Extension School. Last semester, I took CSCI E-3 and CSCI E-12. 
    From those classes, I learned a great deal about front end development. I’m taking this class so I can 
    learn more about back end development.  In my free time, I like exercise, reading, hiking, and skiing. 
    I look forward to taking this class with you-all.
    <br/><br/>
    Jason</p>
    
    <br/>
    
    <h2>Random Quote<span id="refresh"> (Refresh to see more quotes)</span></h2>
    <p id="random"><?php echo $randomQuotes[$randomKey[0]]; ?></p>
    </div>
    
</body>

</html>