<?php

class User{
    var $idUsuario;
    var $nombre;
    var $apellido;
    var $nomusu;
    var $clave;
    var $pref01;
    var $pref02;
    var $pref03;
    
    public function ListaUsuarios(){        
        $oConn=new Conexion();
        if ($oConn->Conectar())
            $db=$oConn->objconn;
        else
            return false;
            
        $sql="SELECT idusuario, nombre"
             ." FROM usuario";
        
        $resultado=$db->query($sql);
        $i=0;    
        while($fila = $resultado->fetch_assoc()){         
          $oLista= new Usuario($fila["idusuario"],
                                        $fila["nombre"]);
          $arrUsuarios[$i]=$oLista;
          $i++;
         }
         return $arrUsuarios;
        
    }
    
    
    
}
