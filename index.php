<?php
date_default_timezone_set('America/Mexico_city');
$fecha=date("d-m-Y H:i:s");
$fecha;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
<h1>Bienvenido a <i>Noticias Yisus</i></h1>
<nav>
    <p> Noticias Yisus</p>
    <p><?php echo $fecha?></p>
</nav>
    </header>

    <div class="wrapper">
        <div class="cuadro">
            <div class="not1">
                <h4>Saltos de esquí y carrera de montaña, entre las propuestas para los Juegos Europeos de 2023</h4>
                <div align="center" ><img src="imagenes/img1.jpg" ></div>
                <p>Los comités olímpicos europeos y el comité organizador de los Juegos
                     Europeos de 2023 en Cracovia (Polonia) han acordado una lista preliminar 
                     de 23 deportes para esta tercera edición de la cita continental, que incluye 
                     como principales novedades los saltos de esquí de verano, las carreras de montaña 
                     y nuevas disciplinas olímpicas como la escalada o el 'breakdance</p>
            </div>
            <div class="not2">
            <h4>Luna azul de Halloween 2020: Dónde y cómo ver en vivo el fenómeno astronómico del 31 de octubre</h4>
                   <p>Este 2020 han pasado algunos fenómenos naturales y astronómicos que han logrado sorprendernos y ahora se acerca la luna azul, un acontecimiento que volverá a repetirse hasta el 2039. Este fenómeno podrá verse en Halloween -31 de octubre- pero por su nombre no quiere decir que veremos a la luna en un tono turquesa o algo parecido.</p>
                   <div align="center" ><img src="imagenes/img2.jpg" height="300px"></div>
                   <p>A pesar de su nombre, es imposible que se pueda ver de ese tono. En realidad, la mayoría de lunas azules se tornan de un color gris pálido y blanco, así que no cambian sus propiedades físicas, aunque las reacciones químicas de la atmósfera de la tierra le producen un efecto azulado.</p>
            </div>
            <div class="cuadro2">
               <div class="not3">
               <h4>María José Sánchez: "Me veo peleando todas las medallas"</h4>
                   <p>La clavadista María José Sánchez no irá a los Juegos Olímpicos de la Juventud de 2022 porque se cancelaron, pero sueña con consolidarse al ser la primera mexicana que gana una medalla en la plataforma 10 metros individual en Tokyo 2020 o hasta Paris 2024.</p>
               </div>
               <div class="not4">
                   <h4>Los deportes de combate se enfrentan al coronavirus</h4>
                   <p>Por lo general, un combate deportivo implica contacto físico con otra persona o bien con algún objeto, algo que dadas las circunstancias actuales con la pandemia mundial por el coronavirus supone un problema</p>
               </div>
               <div class="not5">
               <h4>Disney presenta las primeras imágenes de "The Mandalorian 2"</h4>
                   <div align="center"><img src="imagenes/img3.jpg" height="150px"></div>
               </div>

            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
    
</body>
</html>




