<?php
 
use Ls\Sugerencias\model\Suggestion;

if (isset($_POST['q'])) {
    $q = $_POST['q'];
    Suggestion::saveSearch($q);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/29b54ffa40.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<header>
    <nav class="nav">
        <form action="" method="post">
        <div class="flex-container" >
            <ul class="nav__ul">
                <!--<input type="submit" name="enviar" class="form__input " value="search">-->
                
                <li class="nav__li"><i class="fa-solid fa-house"></i><a href="p3.2">inicio</a></li>
                <li class="nav__li"><i class="fa-solid fa-user-group"></i></i><a href="src/vistas/recomendaciones.php">Recomendaciones</a></li>
                <li class="nav__li"><i class="fa-solid fa-circle-question"></i><a href="0">ayuda</a></li>
              </ul> 
             
          </div>
        </form>
        
    </nav>
  </header>
  
<body>
    <form action="" method="post">
        <h3>¿Comó le gustaria pasar sus vacaciones?</h3>
    <input type="text" name="q" class="form__input" >
    </form>

    
           

 <div class="grid-container">
    <div class="grid-item grid-main">
    <li> 
            <img src="https://cdn.shortpixel.ai/spai/w_600+q_lossy+ret_img+to_webp/https://www.lugaresturisticos.org/wp-content/uploads/2018/06/Parque-Nacional-Morrocoy.jpg" alt="">
            <b>Parque Nacional Morrocoy</b><br><p>Domina una zona de manglares, nutridos islotes y cayos con bellas playas de arena.</p>
            
        </li>
        <li>
            <img src="https://cdn.shortpixel.ai/spai/w_696+q_lossy+ret_img+to_webp/https://www.lugaresturisticos.org/wp-content/uploads/2018/06/Medanos-de-Coro-1.jpg" alt="">
            <b>Médanos de Coro</b>
            <p>son un panorama espectacular, principalmente porque se encuentran ubicadas en lo que es básicamente un país tropical.</p>
            
        </li>
        <li>
            <img src="https://cdn.shortpixel.ai/spai/w_696+q_lossy+ret_img+to_webp/https://www.lugaresturisticos.org/wp-content/uploads/2018/06/parque-mochima.jpg" alt="">
            <b>Parque Nacional Mochima</b>
           <p> está situado en la costa noreste y está delineado para resguardar el medio ambiente marino y las hermosas selvas de las montañas Turimiquire.</p>
           
        </li>    
    </div>
    <div class="grid-item grid-aside">
        <li>
            <img src="https://cdn.shortpixel.ai/spai/w_696+q_lossy+ret_img+to_webp/https://www.lugaresturisticos.org/wp-content/uploads/2018/06/Isla-de-Margarita.jpg" alt="">
            <b>Isla Margarita</b>
            <p>es conocida como la isla más grande de toda la costa noreste de Venezuela, es un excelente lugar para hacer caminatas por la playa.</p>
            
        </li>
        <li>
            <img src="https://cdn.shortpixel.ai/spai/w_680+q_lossy+ret_img+to_webp/https://www.lugaresturisticos.org/wp-content/uploads/2018/06/roraima.jpg" alt="">
            <b>Monte Roraima</b>
            <p>es una montaña de mesa o también conocida como tepuy que se localiza a una altura de 2,870 metros.</p>
            
        </li>
        <li>
            <img src="https://cdn.shortpixel.ai/spai/w_524+q_lossy+ret_img+to_webp/https://www.lugaresturisticos.org/wp-content/uploads/2018/06/teleferico-merida.jpg" alt="">
            <b>Teleférico de Mérida</b>
            <p>Es considerado como el teleférico más largo y más alto de todo el mundo.</p>
        
        </li>
    </div>
  </div>

  <div>
  <table>
    <th>Lugares recomendados</th>

    <?php
     if (isset($_POST['q'])) {
                    
        $suggestions = Suggestion::getSuggestions($_POST['q']);

        foreach ($suggestions as $suggestion) {
      
        echo '<tr>
        <td>'.$suggestion['Lugares'].'/td>;
        </tr>';
        }
    }
    ?>
    
    
  </table>
  </div>

  <style>
    table,th,td{
    border: 1px solid black;
    border-collapse: collapse;
    }
    tr{
    background-color: rgb(0, 226, 151);;
    color:white;
    }
    th,td{
    text-align: center;
    }
    table{
    width: 100%;
    }
  </style>

   

</body>

</html>