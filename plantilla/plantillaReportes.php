<?php
function getPlantilla(){

$contenido='
<body>
    <header>
        <h2>SMG Report</h2>
    </header>

    <div class="container-plantilla_one">
        <div class="content">
            <p>Hours Report
            <br>
            Wild Planet Foods
            <br>
            Date 10/01/2023 - 10/04/2023
            </p>
        </div>
    </div>

    <div class="contaner-plantilla_two">
        <h2>Report</h2>
        <div class="content">
            <p>Hey NOMBRE</p>
            <p>Paquete de Horas / Suscripcion. Left: 2hrs:20min</p>
        </div>
        <div class="task">
            <p>texto</p>
            <p>texto</p>
            <p>texto</p>
            <p>texto</p>
            <p>texto</p>
            <p>texto</p>
        </div>
    </div>

    <div class="contaner-plantilla_three">
        <table>
            <tr><th style="rotate:-90; position: fixed; bottom: 0; left: 0;">¡Hola mundo!</th></tr>
            <tr><td>Este es el contenido de tu página...</td></tr>
        </table>
        <div class="task">
            <p>texto</p>
            <p>texto</p>
            <p>texto</p>
            <p>texto</p>
            <p>texto</p>
            <p>texto</p>
        </div>
    </div>

</body>';

return $contenido;

}

?>