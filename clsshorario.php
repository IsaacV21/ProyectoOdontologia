<?php
require("clssdb.php");
class clsshorario
{
   protected $id_horario;
   protected $hora_ent;
   protected $hora_sal;
   protected $dia;
   private $dbobj;  

   /////  metodos 
   function __construct()
   {
      $this->id_horario="";
      $this->hora_ent="";
      $this->hora_sal="";
      $this->dia="";
      $this->dbobj= new clssdb();// intancia ClssDB
   }
   //busca segun la cedula
   public function buscar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="select * from horario where id_horario = '".$this->id_horario."'"; //intruccion en Sql
      $tb=$this->dbobj->select($sql);
      if ($fila=$this->dbobj->siguiente($tb))
      {               
         $this->hora_ent=$fila['hora_ent'];
         $this->hora_sal=$fila['hora_sal'];
         $this->dia=$fila['dia'];
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
      $sql="update horario set hora_ent = '".$this->hora_ent."', hora_sal = '".$this->hora_sal."', dia = '".$this->dia."' where id_horario = '".$this->id_horario."'"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   public function guardar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $id=$this->dbobj->generarcodigo("horario","id_horario");
      echo $id;
      $sql="insert into horario (id_horario,hora_ent,hora_sal,dia) values ('".$id."','".$this->hora_ent."','".$this->hora_sal."','".$this->dia."')"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   public function eliminar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="delete from horario where id_horario = '".$this->id_horario."'"; //intruccion en Sql
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