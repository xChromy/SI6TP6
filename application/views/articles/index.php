<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


foreach ($articles as $article): 
    ?>
    <h2>
        <?php 
        
        echo $article['titre']
        
                
         ?>
    </h2>

    <div id="main">
        <?php 
        
        echo $article['texte'] 
                
        ?>
    </div>

    <p>
        <a href="view/<?php echo $article['titre'] ?>">Voir article</a>
    </p>
    
<?php 
endforeach 
?>
