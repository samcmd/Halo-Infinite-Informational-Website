
<nav>
    <a class="<?php
    if (PATH_PARTS['filename'] == "index"){
        print'activePage';
    }    
    ?> navigate" href="../index.php">Home</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "about"){
        print'activePage';
    }    
    ?> navigate" href="../about.php">About</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "contact"){
        print'activePage';
    }    
    ?> navigate" href="../upcoming.php">Contact</a>

<div class="dropdown">
        <button class="dropbtn">Weapons&#9662</button>
        <div class="dropdown-content">
            <a href="../ar.php">MA40 Assualt Rifle</a>
            <a href="../sidekick.php">MK50 Sidekick</a>
            <a href="../br.php">BR75 Battle Rifle</a>
            <a href="../commando.php">VK78 Commando</a>
            <a href="../spnkr.php">M41 SPNKR</a>
            <a href="../sniper.php">S7 Sniper</a>
            <a href="../bulldog.php">CQS48 Bulldog</a>
            <a href="../hydra.php">MLRS-2 Hydra</a>
        </div>
    </div>
</nav>