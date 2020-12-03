

<?php
function displayItem1(){

        $nom = "voiture rouge";
        $prix = " 1500euro";
        $photo = "<img src=voiturerouge.jpg alt=''/>";
        $alt = "voiture rouge";
        $item=[$nom,$prix,$photo];
            for($i=0;$i<count ($item); $i++){
                echo $item[$i] . '<br/>';
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

function displayItem($nom,$prix,$image){
    include("article.php");

    foreach($articles as $product){
        echo $product["nom"];
        echo $product["prix"];
        echo '<img src="'.$product["photo"].'" alt="'.$product["alt"].'"/><br>';
    }
}

?>