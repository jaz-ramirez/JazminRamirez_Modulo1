<?php
    //Elementos del formulario
    $obra = (isset($_POST ["obra"])&& $_POST["obra"] !="") ?$_POST["obra"]: 0;
    $autor = (isset($_POST ["autor"])&& $_POST["autor"] !="") ?$_POST["autor"]: "SIN AUTOR";
    $año = (isset($_POST ["año"])&& $_POST["año"] !="") ?$_POST["año"]: "SIN AÑO";
    $form = (isset($_POST ["form"])&& $_POST["form"] !="") ?$_POST["form"]: 0;
    $carpeta="./statics/";

    //Si el usuario ingresa directamente del formulario para registrar obra
    if($form!==0)
    {
        $nombre= $_FILES['arch']['name'];
        $arch = $_FILES ['arch']['tmp_name'];

        $extension= pathinfo($nombre, PATHINFO_EXTENSION);
        //Verifica que el archivo tenga las extensiones de imagen
        if($extension=="jpg"||$extension=="jpeg"||$extension=="png")
        {
           //verifica que no exista ya en la carpeta
            if(file_exists($carpeta.$obra.'$'.$autor.'$&'.$año.'&.'.$extension)==false)
            {
                rename($arch, $carpeta.$obra.'$'.$autor.'$&'.$año.'&.'.$extension);
                echo "<h1>Tu imagen se cargó correctamente en tu galería</h1><br><br>";
                echo "<a href=\"./Actividad15.php\"><button>Ir a galería</button></a>"; 
            }
            else{
                echo "<h1>ESTE ARCHIVO YA EXISTE EN LA GALERÍA</h1><br><br>";
                echo "<a href=\"./Registro.html\"><button>Regresar</button></a>"; 
            }
        }
        else //si no tiene una extensión válida
        {
            echo "<h1>El archivo \"$nombre\" es inválido. No tiene extensión png, jpg, jpeg</h1><br><br>";
            echo "<a href=\"./Registro.html\"><button>Regresar</button></a>"; 
        }

       
       
    }
   
    //sin no se ingresa del formjulario
    if($form==0)
    {
        $folder = opendir($carpeta);
        $imagenes= array();
        $hayimagen = true;
        $cuenta=0;
        //Mientras haya imágenes
        while($hayimagen)
        {   //hay que leer en la carpeta
            $ima= readdir($folder);
            if($ima !== false)
            {
                if($ima != "." && $ima != "..")
                {
                    array_push ($imagenes, $ima); 
                    $cuenta++;
                }
                
            }
            else
            {
                $hayimagen=false;//no hay que leer en la carpeta
            }
                
            
        }
        //si hubo alguna imagen en la galería
        if($cuenta>0)
        {
            $cuentaima=0;
            $i=0;
            echo "<div style='float:center;margin:0 auto;width:300px;'>";
            echo "<h1>IMÁGENES DE LA GALERÍA DE ARTE</h1>";
            echo "<table border=\"1\"><tbody>";
            foreach($imagenes as $key => $value)
            {
               
                $arrayname= explode("$",$imagenes[$cuentaima]);
                $arrayaño= explode("&",$arrayname[2]);
                //Imprima cada fila de la tabla
                if($cuentaima%2 ==0)
                {
                    echo "<tr>";
                    echo "<td><img src='./statics/".$value."' width='400'>";
                    echo "<br><ul>";
                    echo "<li><strong>NOMBRE DE LA PINTURA:</strong>". strtoupper($arrayname[0]);
                    echo "<li><strong>NOMBRE DEL PINTOR:</strong>". strtoupper($arrayname[1]);
                    echo "<li><strong>AÑO EN QUE SE REALIZÓ:</strong>".$arrayaño[1];
                    echo "</ul></td>"; 
                }
                //imprime cada celda/columna de la tabla
                if($cuentaima%2 !==0)
                {
                    echo "<td><img src='./statics/".$value."' width='200'>";
                    echo "<br><ul>";
                    echo "<li><strong>NOMBRE DE LA PINTURA:</strong>". strtoupper($arrayname[0]);
                    echo "<li><strong>NOMBRE DEL PINTOR:</strong>". strtoupper($arrayname[1]);
                    echo "<li><strong>AÑO EN QUE SE REALIZÓ:</strong>".$arrayaño[1];
                    echo "</ul></td>";
                    echo "</tr>";
                }
                $cuentaima++; 
                
            }
                
            echo "</table></tbody>";
            echo "</div><br><br>";
            echo "<a href=\"./Registro.html\"><button>Agregar obra a la galería</button></a>";
        }
    
        //Si no hubo imágenes en la galería
        if($cuenta==0)
        {
            echo "<h1>TU GALERÍA NO TIENE NINGUNA IMAGEN</h1>";
            echo "<br><br><a href=\"./Registro.html\" ><button>Agregar obra a la galería</button></a>";   
        }
        closedir($folder);
        
    }
    //JAZ RAMÍREZ
?>