<?php
include 'header.php';
echo $header_hmtl;
$libros = array('McGrawHill' => array('Tema' => 'Energía', 'Año' => '1995'),
                'Pearson' => array('Tema' => 'Cálculo', 'Año' => '2003')
                'Internacional' => array('Tema' => 'Filosofía', 'Año' =>'2012' )
                'Planeta' => array('Tema' => 'Innovación', 'Año' => '2008'));

 ?>
 <table class = "table table-hover">
   <head>
     <tr>
       <td>Editorial</td>
       <td>Tema</td>
       <td>Año</td>
     </tr>
   </head>
  <body>

    <?php
    if(array_key_exists('brand_label', $_REQUEST) && array_key_exists($_REQUEST('brand_data'),$libros)) {
      $brand_data = $libros($_REQUEST('brand_label'));
      echo '<tr>';
        echo '<td>';
      echo $REQUEST('brand_label');
        echo '</td>';
        echo '<td>';
      echo $brand_data('Tema');
        echo '</td>';
        echo '<td>';
      echo $brand_data('Año');
        echo '</td>';
      echo '</tr>';
      else {
        foreach($libros as $brand_label => $brand_data){
          echo '<tr>';
            echo '<td>';
          echo $REQUEST('brand_label');
            echo '</td>';
            echo '<td>';
          echo $brand_data('Tema');
            echo '</td>';
            echo '<td>';
          echo $brand_data('Año');
            echo '</td>';
          echo '</tr>';
        }
      }

    }
      ?>
    </body>
  </table>

  <?php
  echo $footer_hmtl;
    ?>
