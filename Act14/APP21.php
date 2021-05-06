<?php
    //Variables de la primera app
    $hora= (isset ($_POST["hora"]) && $_POST["hora"] !="") ?$_POST["hora"]: 0;
    $NewY= (isset ($_POST["NY"]) && $_POST["NY"] !="") ?$_POST["NY"]: 0;
    $Paulo= (isset ($_POST["paulo"]) && $_POST["paulo"] !="") ?$_POST["paulo"]: 0;
    $madrid= (isset ($_POST["madrid"]) && $_POST["madrid"] !="") ?$_POST["madrid"]: 0;
    $paris= (isset ($_POST["paris"]) && $_POST["paris"] !="") ?$_POST["paris"]: 0;
    $roma= (isset ($_POST["roma"]) && $_POST["roma"] !="") ?$_POST["roma"]: 0;
    $atenas= (isset ($_POST["atenas"]) && $_POST["atenas"] !="") ?$_POST["atenas"]: 0;
    $beijing= (isset ($_POST["beijing"]) && $_POST["beijing"] !="") ?$_POST["beijing"]: 0;
    $tokio= (isset ($_POST["tokio"]) && $_POST["tokio"] !="") ?$_POST["tokio"]: 0;
    //Variables d ela segunda app
    $nacimiento= (isset ($_POST["nacimiento"]) && $_POST["nacimiento"] !="") ?$_POST["nacimiento"]: 0;
    $days= (isset ($_POST["days"]) && $_POST["days"] !="") ?$_POST["days"]: 0;
    $hours= (isset ($_POST["hours"]) && $_POST["hours"] !="") ?$_POST["hours"]: 0;
    $minutes= (isset ($_POST["minutes"]) && $_POST["minutes"] !="") ?$_POST["minutes"]: 0;
    $weekend= (isset ($_POST["weekend"]) && $_POST["weekend"] !="") ?$_POST["weekend"]: 0;
    //Si usan la primera app
    if($hora !== 0)
    {
        $Cadhora= explode(":",$hora);//Cadena en localidad 0 horas y localidad [1] minutos
        $seg=mktime($Cadhora[0], $Cadhora[1]); //convertir en segundos la hora
        
        echo "<table border=\"1\">";
            echo "<thead>";
                echo "<tr><th colspan=\"2\">Reloj Mundial</th><tr>";
            echo "<thead>";
            echo "<tbody>";
                echo "<tr>";
                        echo "<td>Ciudad de México</td>";
                        echo "<td>";
                        date_default_timezone_set("America/Mexico_City");
                        //Paso como timestamp los segundos convertidos de una hora
                        $hourNY =date("H:i ", $seg);
                        //Convierto en cadena para quitar los (:)
                        $HNY= explode(":",$hourNY);
                        //imprimo con los rquerimentos de hrs y mins
                        echo $HNY[0]. " hrs ". $HNY[1]. " mins";                
                    echo "<tr>";
                //los siguientes ifs son para verificar los campos requeridos por el ususario
                //Siguen el mismo algoritmo que el anterior, establece la zona horaria, obtiene la hora con el paramétro seg que especifica la hora introducida,
                //La convierte en arreglo para quitarle los : y finalmente lo imprime con hrs y mins
                if($NewY!==0)
                {
                    echo "<tr>";
                        echo "<td>Nueva York</td>";
                        echo "<td>";
                            date_default_timezone_set("America/New_York");
                            $hourNY =date("H:i ", $seg);
                            $HNY= explode(":",$hourNY);
                            echo $HNY[0]. " hrs ". $HNY[1]. " mins";
                        echo "</td>";
                    echo "<tr>";

                }
                if($Paulo!==0)
                {
                    echo "<tr>";
                        echo "<td>Sao Paulo</td>";
                        echo "<td>";
                            date_default_timezone_set("America/Sao_Paulo");
                            $hourSP =date("H:i ", $seg);
                            $HSP= explode(":",$hourSP);
                            echo $HSP[0]. " hrs ". $HSP[1]. " mins";
                        echo "</td>";
                    echo "<tr>";

                }
                if($madrid!==0)
                {
                    echo "<tr>";
                        echo "<td>Madrid</td>";
                        echo "<td>";
                            date_default_timezone_set("Europe/Madrid");
                            $hourMa =date("H:i ", $seg);
                            $HMa= explode(":",$hourMa);
                            echo $HMa[0]. " hrs ". $HMa[1]. " mins";
                        echo "</td>";
                    echo "<tr>";

                }
                if($paris!==0)
                {
                    echo "<tr>";
                        echo "<td>Paris</td>";
                        echo "<td>";
                            date_default_timezone_set("Europe/Paris");
                            $hourPar =date("H:i ", $seg);
                            $HPar= explode(":",$hourPar);
                            echo $HPar[0]. " hrs ". $HPar[1]. " mins";
                        echo "</td>";
                    echo "<tr>";

                }
                if($roma!==0)
                {
                    echo "<tr>";
                        echo "<td>Roma</td>";
                        echo "<td>";
                            date_default_timezone_set("Europe/Rome");
                            $hourRo =date("H:i ", $seg);
                            $HRo= explode(":",$hourRo);
                            echo $HRo[0]. " hrs ". $HRo[1]. " mins";
                        echo "</td>";
                    echo "<tr>";

                }
                if($atenas!==0)
                {
                    echo "<tr>";
                        echo "<td>Atenas</td>";
                        echo "<td>";
                            date_default_timezone_set("Europe/Athens");
                            $hourAT =date("H:i ", $seg);
                            $HAT= explode(":",$hourAT);
                            echo $HAT[0]. " hrs ". $HAT[1]. " mins";
                        echo "</td>";
                    echo "<tr>";

                }
                if($beijing!==0)
                {
                    echo "<tr>";
                        echo "<td>Beijing</td>";
                        echo "<td>";
                            date_default_timezone_set("Asia/Shanghai");
                            $hourBe =date("H:i ", $seg);
                            $HBe= explode(":",$hourBe);
                            echo $HBe[0]. " hrs ". $HBe[1]. " mins";
                        echo "</td>";
                    echo "<tr>";

                }
                if($tokio!==0)
                {
                    echo "<tr>";
                        echo "<td>Tokio</td>";
                        echo "<td>";
                            date_default_timezone_set("Asia/Tokyo");
                            $hourTok =date("H:i ", $seg);
                            $HTok= explode(":",$hourTok);
                            echo $HTok[0]. " hrs ". $HTok[1]. " mins";
                        echo "</td>";
                    echo "<tr>";

                }
            echo "</tbody>";

        echo "</table>";
    } 
    //Si se desea usar la app 2
    if ($nacimiento!==0)
    {
        //convierto en cadena la fecha para quitarle los :
        $cumple= explode("-", $nacimiento);
        //obtengo la fecha actual
        date_default_timezone_set("America/Mexico_City");
        $fechactual= getdate();
        //Establezco el año del proximo cumpleaños
        if($fechactual["mon"]>$cumple [1]) //Ya pasó el cumpleaños este año, por lo que el próximo es el sig año
        {
            $nextcumple= [$cumple [2],"-",$cumple [1],"-", ($fechactual["year"]+1)];
        }
        else if($fechactual["mon"]<$cumple [1])//Falta tiempo (mes/meses)para el próximo cumple que es en este año
        {
            $nextcumple= [$cumple [2],"-",$cumple [1],"-", $fechactual["year"]];
        }
        else if($fechactual["mon"]==$cumple [1])
        {
            if($fechactual["mday"]>$cumple [2]) //Ya pasó el cumpleaños este año, por lo que el próximo es el sig año
                $nextcumple= [$cumple [2],"-",$cumple [1],"-", ($fechactual["year"]+1)];
            else if ($fechactual["mday"]<$cumple [2])//Faltan días para el sig cumple y es en el año actual
                $nextcumple= [$cumple [2],"-",$cumple [1],"-", $fechactual["year"]];
            else if ($fechactual["mday"]==$cumple [2])//Ya pasó el cumpleaños este año, por lo que el próximo es el sig año
                $nextcumple= [$cumple [2],"-",$cumple [1],"-", ($fechactual["year"]+1)];
        }
       //Paso el próximo cumple a segundos, el día y mes permanecesn constantes, el año se define de acuerdo a los ifs anteriores
        $segproxcumple = mktime(0, 0, 0,  $cumple [1], $cumple [2],  $nextcumple[4] );
        //Resto los segundos del proximo cumple del momento exacto en el que se hace la consulta.
        $segundos= $segproxcumple-$fechactual["0"];
        //Obtengo los segundos entre hoy y el proximo cumple considerando que es a las 0 hrs 0mins del día festejado
        $dias= intval ($segundos/86400); //Obtengo días a partir de segundos por día
        $Horas= intval($segundos/3600);//Obtengo horas a partir de segundos por horas
        $minutos= intval ($segundos/60);//Obtengo minutos  a partir de segundos por minutos
        $week= date("w", $segproxcumple);//Obtengo el día de la semana
        if($week==0||$week==6) //Si es sabado o domingo es fin
            $finde="Sí es fin de semana";
        else//si no pues no.
            $finde="No es fin de semana";

        echo "<table border=\"1\">";
            echo "<thead>";
                echo "<th>Cumpleaños: </th>";
                echo "<th>";
                    foreach ($nextcumple as $key => $value)
                        echo $value;//imprimo proxima fecha de cumple
                echo "</th>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                if($days!==0)//Si se requieren días
                {
                    echo "<td>Días</td>";
                    echo "<td>$dias</td>";
                }
    
                echo "</tr>";
                echo "<tr>";
                if($hours!==0)//Si se requieren horas
                {
                    echo "<td>Horas</td>";
                    echo "<td>$Horas</td>";
                }
                    
                echo "</tr>";
                echo "<tr>";
                if($minutes!==0)//Si se requieren minutos
                {
                    echo "<td>Minutos</td>";
                    echo "<td>$minutos</td>";
                }
                    
                echo "</tr>";
                echo "<tr>";
                if($weekend!==0)//Si se requiere saber si es weekend
                {
                    echo "<td>¿Es fn de semana?</td>";
                    echo "<td>$finde</td>";
                }
                    
                echo "</tr>";
            echo "</tbody>";
        echo "</table>";

        
    }

    if ($nacimiento==0&&$hora==0) //por si se entró directamente al php
    {
        echo "No se introdujo nada, regrese al formulario";
    }
    //JAZMÍNRAMÍREZ
?>