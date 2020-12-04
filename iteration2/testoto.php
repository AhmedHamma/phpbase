<?php
function displayItem1(){
    echo $nom;
    echo $prix;
    echo $photo;
}

}
function displayItem2(){

    $nom = "voiture noire";
    $prix = " 1500euro";
    $photo = "<img src=voiturenoir.jpg alt=''/>";;
    $alt = "voiture noire";
    $item=[$nom,$prix,$photo];
    for($i=0;$i<count ($item); $i++){
        echo $item[$i] . '<br/>';
    }

}
function displayItem3(){

    $nom = "voiture blanche";
    $prix = " 1500euro";
    $photo = "<img src=voitureblanche.jpg alt=''/>";
    $alt = "voiture blanche";
    $item=[$nom,$prix,$photo];
    for($i=0;$i<count ($item); $i++){
        echo $item[$i] . '<br/>';
    }

}
?>