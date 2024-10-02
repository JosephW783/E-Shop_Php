<?php
require_once '/Users/studioamica/Desktop/E-Shop_Php/Classes/Smartphone.php';
require_once '/Users/studioamica/Desktop/E-Shop_Php/Classes/Notebook.php';

// Istanze oggetto Smartphone
$Galaxy = new Smartphone("Samsung", "Galaxy S24", "Smartphone", 10, "Nero", 20, 899);
$Iphone = new Smartphone("Apple", "Iphone 15 Pro", "Smartphone", 20, "Natural Titanium", 20, 1299);
$Pixel = new Smartphone( "Google", "Pixel 9", "Smartphone", 5, "Bianco", 10,  799);

//Istanze oggeto Notebook
$Macbook = new Notebook("Apple", "Mackbook Air M3", "Notebook", 20, "Grigio Siderale", 30, 1199);
$Asus = new Notebook("Asus", "Vivobook", "Notebook", 20, "Argento", 10, 649 );
$MSI = new Notebook("MSI", "GP75 Leopard", "Notebook", 10, "Nero", 15, 1849);
?>

<div class="container">

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/pixel.jpg" alt="">
      </div>
      <div class="card_info flex_column_center">
    <h2><?php echo $Galaxy->marca ." ". $Galaxy->nome ?>  </h2>
    <span>Colore: <?php echo $Galaxy->colore ?></span>

      <div>class="price flex_column_center">
        <h4 class="delete"><?php echo $Galaxy->prezzo ?>  €</h4>
        <span>Prezzo:</span>
        <h2><?php echo $Galaxy->calcolaSconto($Galaxy->prezzo) ?>  </h2>
</div>
<span class="ok_disp"><?php echo $Galaxy->disponibilita($Galaxy->quantita) ?> </span>
        
        <span class="sconto">Sconto: <?php echo $Galaxy->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->