<?php 

    class BD {

        // se crea una instancia para la conexion
        public static $instancia=null;

        // metodo para establecer la conexion

        public static function crearInstancia(){

            // se verifica que la instancia contenga algo

            if (!isset(self::$instancia)){

                // una vez se tiene algo en la instancia se procede a establecer la conexion

                // se manejan excepciones de los posible errores y tener la app fuera de posible errores

                $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

                // como parametros se pasa el nombre de la base de datos y las credenciales
                // en esta caso es aplicacion y el usuario root mas la contraseña 

                self::$instancia = new PDO('mysql:host=localhost;dbname=aplicacion', 'root', '', $opciones);
                echo "conectado...";
            }

            // en caso de no tener nada se retorna el valor de null
            return self::$instancia;
        }
    }
?>