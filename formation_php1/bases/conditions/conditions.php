<?php
    $age = 17;

    // $age += 17;

    if($age > 19){
        echo("Vous etes majeur \n");
    }else{
        echo("Vous etes mineur \n");
    }

    $estMajeur = $age > 18 ;
    $aLePermis = true;

    if($estMajeur and $aLePermis){
        echo("Vous avez le droit de conduire");
    }elseif((!$estMajeur and $aLePermis) or ($estMajeur and !$aLePermis)){

        echo("Vous n'avez  pas le droit de conduire");
    }
?>