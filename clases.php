<?php
    class Login{
        var $estado;
        var $id;
        var $usuario;
        var $nombre;
        var $fila;
       
        
        function set(){//no lo use pero lo dejo para un uso en el futuro
            $this->estado="logueado";
           
            $this->id=$this->fila['idUsuario'];
            $this->nombre=$this->fila['nombre'];
        }
        /*creamos una sesion de usuario*/
        function crear_sesion($fila){
            $this->estado="logeado";
            $this->id=$fila['idUsuario'];
            $this->nombre=$fila['nombre'];
           

            $_SESSION['usuario']=$this->usuario;
            $_SESSION['nombre']=$this->nombre;
            $_SESSION['id']=$this->id;
            $_SESSION['estado']="logeado"; 
        }

        function autentificar($con,$c,$u){/*recibe del archivo ingresar2.php*/
            $query="SELECT * FROM usuario WHERE nombre='$u'";
            $consulta=mysqli_query($con,$query);

            if(mysqli_num_rows($consulta)==1){/* 1 si hay un y un solo usuario q coincida con el mail y la clave */
                $this->fila=mysqli_fetch_array($consulta);/*asignamos el resultado del arreglo del registro del usuario en fila*/
                $this->crear_sesion($this->fila);
                //return $this->fila;

            }
            else{
                 throw new Exception("1");//excepción capturada
                 
            }

        }
        function autorizar(){
            if(isset($_SESSION['estado'])){
                if($_SESSION['estado']=="logeado"){
                    return true;

                }
            }
            else{
                throw new Exception("2");
                
            }
        }
    }
?>