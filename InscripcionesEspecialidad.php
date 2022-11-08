<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="estilosO.css" type="text/css" media="screen,projection" >
    <script src="https://kit.fontawesome.com/914b9f23a6.js" crossorigin="anonymous"></script>
    <?php 
        require("clssesp.php");
        $obj = new clssesp();
        require_once("opespsc.php");
    ?>
</head>
<body>
    <div class="father">
        <header class="header">
            <div class="menu margensillo">
                <div class="logo"><a href="Pestana1.html">
                    <i class="fa-solid fa-shield-heart">Cooperativa Santa Cruz</i>
                </a>
                </div>
                <nav class="nav">
                    <a href="ProyectoOdon.html"><i class="fa-solid fa-house-chimney"></i>Inicio</a>
                    <a href="Pestana1.html"><i class="fa-solid fa-people-group"></i>comunidad</a>
                    <a href="MenuInscripciones.html"><i class="fa-solid fa-stethoscope"></i>Agendar Citas</a>
                    <a href="Pestana1.html"><i class="fa-solid fa-book-bookmark"></i>Info</a>
                </nav>
                <div class="sociales">
                    <a href=""><i class="fa-solid fa-users-rectangle"></i></a>
                </div>
            </div>
            <div class="textirijillo">
                <h1>
                    En nuestro centro de Salud préstamos servicios de Salud de calidad a ¡Precios Solidarios! Para poder contar con una buena Salud
                </h1>
            </div>
        </header>        
        <section class="section">
            <div class="info2" style="text-align: justify;" style="background-image: src="";">
                <!-- <img src="/ImgP/img16.jpg" alt="" class="tama"> -->
                <p style="font-size: 35px">Informacion de la Especialidad</p>
                <form name="form1" id="form1" method="post">
                    <div>
                        <p style="font-size: 25px;">
                            Nombre: <input type="text" name="nom_esp" id="nom_esp" placeholder="Nombre de la Especialidad" value="<?php echo $nom_esp?>"> <br>
                            Descripcion: <input type="text" name="desc_esp" id="desc_esp" placeholder="Describa la Especialidad" value="<?php echo $desc_esp?>"><br>
                            <input type="hidden" name="id_esp" id="id_esp" value="<?php echo $id_esp?>">                   
                            <input type="hidden" id="operacion" name="operacion" value="<?php echo $operacion?>">
                        </p>                    
                    </div>
                <button class='btn-color' name='guarda' onclick='guardar()'>Guardar</button>
                <button class='btn-color' name='buscar' onclick='busca()'>Buscar</button>
                <button class='btn-color' name='modifica' onclick='actualizar()'>Modificar</button>
                <button class='btn-color' name='elimina' onclick="eliminar();">elimina</button> 
                <button class='btn-color' name='limpia' onclick="limpiar();">Limpiar</button>                 
                </form>               
            </div>
            <aside class="aside">
                <div class="publicidad">
                    <h4>Poseemos la mejor asistencia</h4>
                    <img src="./ImgP/img10.jpg" alt="">
                </div>
                <div class="publicidad">
                    <h4>Personal autorizado</h4>
                    <img src="./ImgP/img11.jpg" alt="">
                </div>
            </aside>
        </section>
        <footer class="footer">
            <nav class="pie"></nav>
        </footer>
    </div>
    <script type="text/javascript" src="opespsc.js"></script>
</body>
</html>