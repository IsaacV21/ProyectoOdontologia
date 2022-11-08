<?php
require("clssdb.php");
class clssesp
{
   protected $id_esp;
   protected $nom_esp;
   protected $desc_esp;
   private $dbobj;  

   /////  metodos 
   function __construct()
   {
      $this->id_esp="";
      $this->nom_esp="";
      $this->desc_esp="";
      $this->dbobj= new clssdb();// intancia ClssDB
   }
   //busca segun la cedula
   public function buscar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="select * from especialidad where nom_esp like '%".$this->nom_esp."%'"; //intruccion en Sql
      $tb=$this->dbobj->select($sql);
      if ($fila=$this->dbobj->siguiente($tb))
      {               
         $this->nom_esp=$fila['nom_esp'];
         $this->desc_esp=$fila['desc_esp'];
         $exito=true;
      }else{
         $exito=false;
      }
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   public function actualiza()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="update especialidad set nom_esp = '".$this->nom_esp."', desc_esp = '".$this->desc_esp."' where id_esp = '".$this->id_esp."'"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   public function guardar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $id=$this->dbobj->generarcodigo("especialidad","id_esp");
      $sql="insert into especialidad (id_esp,nom_esp,desc_esp) values ('".$id."','".$this->nom_esp."','".$this->desc_esp."')"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   public function eliminar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="delete from especialidad where id_esp = '".$this->id_esp."'"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   //setter unico
   public function Seti($atributo,$value)
   {
      $this->$atributo=$value;
   }
   //getter unico
   public function Geti($atributo)
   {
      return $this->$atributo;
   }

}// fin de la clase
?>