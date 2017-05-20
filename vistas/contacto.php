<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
<div class="bannerc">
    <article class="fondo">
        <article class="contenlogomenu">
            <figure class="imglogo pull-left">
                <img src="../img/maecvo.png" alt="" class="img-responsive">
            </figure>
            <nav class="nav pull-right">
                <ul>
                    <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;INICIO</a></li>
                    <li><a href="nosotros.php"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;NOSOTROS</a></li>
                    <li><a href="servicios.php"><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp;SERVICIOS</a></li>
                    <li class="active"><a href="contacto.php"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;CONTACTO</a></li>
                </ul>
            </nav>
        </article>
        <article class="mensajec"><strong>¡Contáctanos!</strong> ¿Necesitas una capacitación virtual o conocer más acerca de nuestra oferta de servicios? Queremos saber más de ti y la manera de cómo podemos ayudar a tu empresa a crecer.</article>

        <!-- <article class="boton">
            <a href="contacto.php">CONTÁCTANOS</a>
        </article> -->
    </article>
</div>

<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.4692319023598!2d-99.19247672167197!3d19.43532584569623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20200a4013521%3A0x7bde85e1fd18980a!2sAvenida+Homero+538%2C+Polanco%2C+Polanco+V+Secc%2C+11560+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1495308887340" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-default">
                <div class="panel-body">                    
                    <h2>TELEFONO</h2>
                    <p>PENDIENTE</p>
                </div>
                <div class="panel-footer">CONTÁCTANOS</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>HORARIO</h2>
                    <p>Lunes a Viernes de 9am a 6pm</p>
                </div>
                <div class="panel-footer">CONTÁCTANOS</div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>CORREO</h2>
                    <p>info@maecvo.com</p>
                </div>
                <div class="panel-footer">CONTÁCTANOS</div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>DIRECCIÓN</h2>
                    <p>AV. Homero #538 entre C. Lamartine y Arquímedes,  Col. Polanco Chapultepec, Miguel  Hidalgo, México, C.P 11560.</p>
                </div>
                <div class="panel-footer">CONTÁCTANOS</div>
            </div>
        </div>
    </div>
</div>

 
 <div class="container-fluid"> 
    <div class="col-md-offset-4 col-md-4" id="box">
        <h2 class="cont">Formulario de contacto</h2>
        <hr>
            <form class="form-horizontal" action=" " method="" id="contact_form">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input name="first_name" placeholder="Nombre Completo" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="Escribe tu correo" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <input name="phone" placeholder="Escribe tu teléfono" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="comment" placeholder="Escribe tu comentario"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning pull-right">ENVIAR&nbsp;<span ><i class="fa fa-paper-plane" aria-hidden="true"></i></span></button>
                    </div>
                </div>
</div>
</div>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>

</body>
</html>