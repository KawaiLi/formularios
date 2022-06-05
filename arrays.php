<!DOCTYPE html>
<html>
<html lang="en">
  <title>TRABAJO SIN_2022I</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<?php
$libros = array('McGrawHill' => array('Tema' => 'Energía', 'Año' => '1995'),
                'Pearson' => array('Tema' => 'Cálculo', 'Año' => '2003'),
                'Internacional' => array('Tema' => 'Filosofía', 'Año' =>'2012' ),
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
    if(array_key_exists('brand_label', $_REQUEST) && array_key_exists($_REQUEST['brand_label'],$libros)) {
      $brand_data = $libros[$_REQUEST['brand_label']];
      echo '<tr>';
        echo '<td>';
        echo '<a href = "arrays.php?brand_label ='.$REQUEST['brand_label'].'">'.$REQUEST['brand_label'].'</a>';
        echo '</td>';
        echo '<td>';
      echo $brand_data['Tema'];
        echo '</td>';
        echo '<td>';
      echo $brand_data['Año'];
        echo '</td>';
      echo '</tr>';
    } else {
        foreach($libros as $brand_label => $brand_data) {
          echo '<tr>';
            echo '<td>';
            echo '<a href = "arrays.php?brand_label ='.$brand_label.'">'.$brand_label.'</a>';
            echo '</td>';
            echo '<td>';
          echo $brand_data['Tema'];
            echo '</td>';
            echo '<td>';
          echo $brand_data['Año'];
            echo '</td>';
          echo '</tr>';
        }
      }

      ?>
    </body>
  </table>
</body>
</html>
