<?php
require("clssdb.php");
class clssmedico
{
   protected $id_cedulam;
   protected $nombrem;
   protected $apellidom;
   protected $direccionm;
   protected $correom;
   protected $fec_nacm;
   protected $telmovilm;
   protected $tellocalm;
   private $dbobj;  

   /////  metodos 
   function __construct()
   {
      $this->id_cedulam="";
      $this->nombrem="";
      $this->apellidom="";
      $this->direccionm="";
      $this->correom="";
      $this->fec_nacm="";
      $this->telmovilm="";
      $this->tellocalm="";
      $this->dbobj= new clssdb();// intancia ClssDB
   }
   //busca segun la cedula
   public function buscar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="select * from medico where id_cedulam = '".$this->id_cedulam."'"; //intruccion en Sql
      $tb=$this->dbobj->select($sql);
      if ($fila=$this->dbobj->siguiente($tb))
      {               
         $this->id_cedulam=$fila['id_cedulam'];
         $this->nombrem=$fila['nombrem'];
         $this->apellidom=$fila['apellidom'];
         $this->direccionm=$fila['direccionm'];
         $this->correom=$fila['correom'];
         $this->fec_nacm=$fila['fec_nacm'];
         $this->telmovilm=$fila['tel_movilm'];
         $this->tellocalm=$fila['tel_localm'];
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
      $sql="update medico set nombrem = '".$this->nombrem."', apellidom = '".$this->apellidom."', direccionm = '".$this->direccionm."', correom = '".$this->correom."', fec_nacm = '".$this->fec_nacm."', tel_movilm = '".$this->telmovilm."', tel_localm = '".$this->tellocalm."' where id_cedulam = '".$this->id_cedulam."'"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   public function guardar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="insert into medico (id_cedulam,nombrem,apellidom,direccionm,correom,fec_nacm,tel_movilm,tel_localm) values ('".$this->id_cedulam."','".$this->nombrem."','".$this->apellidom."','".$this->direccionm."','".$this->correom."','".$this->fec_nacm."','".$this->telmovilm."','".$this->tellocalm."')"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   public function eliminar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="delete from medico where id_cedulam = '".$this->id_cedulam."'"; //intruccion en Sql
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