<?php
require("clssdb.php");
class clsspaciente
{
   protected $id_cedulap;
   protected $nombrep;
   protected $apellidop;
   protected $correop;
   protected $fec_nacp;
   protected $telmovilp;
   protected $tellocalp;
   protected $motcita; 
   private $dbobj;  

   /////  metodos 
   function __construct()
   {
      $id_cedulap="";
      $nombrep="";
      $apellidop="";
      $correop="";
      $fec_nacp="";
      $telmovilp="";
      $tellocalp="";
      $motcita=""; 
      $this->dbobj= new clssdb();// intancia ClssDB
   }
   //busca segun la cedula
   public function buscar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="select * from Paciente where id_cedulap = '".$this->id_cedulap."'"; //intruccion en Sql
      $tb=$this->dbobj->select($sql);
      if ($fila=$this->dbobj->siguiente($tb))
      {               
         $this->id_cedulap=$fila['id_cedulap'];
         $this->nombrep=$fila['nombrep'];
         $this->apellidop=$fila['apellidop'];
         $this->correop=$fila['correop'];
         $this->fec_nacp=$fila['fec_nacp'];
         $this->telmovilp=$fila['telmovil'];
         $this->tellocalp=$fila['tellocal'];
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
      $sql="update Paciente set nombrep = '".$this->nombrep."', apellidop = '".$this->apellidop."', correop = '".$this->correop."', fec_nacp = '".$this->fec_nacp."', telmovil = '".$this->telmovilp."', tellocal = '".$this->tellocalp."', motcita = '".$this->motcita."' where id_cedulap = '".$this->id_cedulap."'"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   public function guardar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="insert into Paciente (id_cedulap,nombrep,apellidop,correop,fec_nacp,telmovil,tellocal,motcita) values ('".$this->id_cedulap."','".$this->nombrep."','".$this->apellidop."','".$this->correop."','".$this->fec_nacp."','".$this->telmovilp."','".$this->tellocalp."','".$this->motcita."')"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   public function eliminar()
   {
      $this->dbobj->abrir(); //abre la coneccion con la base de datos
      $sql="delete from Paciente where id_cedulap = '".$this->id_cedulap."'"; //intruccion en Sql
      $exito=$this->dbobj->select($sql);
      $this->dbobj->cerrar(); // cierra la coneccion con la base de datos
      return $exito;
   }

   //sets
   public function setcedula($valor)
   {
      $this->id_cedulap=$valor;
   }

   public function setnombre($valor)
   {
      $this->nombrep=$valor;
   }

   public function setapellido($valor)
   {
      $this->apellidop=$valor;
   }

   public function setcorreo($valor)
   {
      $this->correop=$valor;
   }

   public function setfecnac($valor)
   {
      $this->fec_nacp=$valor;
   }

   public function settelmovil($valor)
   {
      $this->telmovilp=$valor;
   }

   public function settellocal($valor)
   {
      $this->tellocalp=$valor;
   }

   public function setmotcita($valor)
   {
      $this->motcita=$valor;
   }

   //gets
   public function getcedula()
   {
      return $this->id_cedulap;
   }

   public function getnombre()
   {
      return $this->nombrep;
   }

   public function getapellido()
   {
      return $this->apellidop;
   }

   public function getcorreo()
   {
      return $this->correop;
   }

   public function getfecnac()
   {
      return $this->fec_nacp;
   }

   public function gettelmovil()
   {
      return $this->telmovilp;
   }

   public function gettellocal()
   {
      return $this->tellocalp;
   }

   public function getmotcita()
   {
      return $this->motcita;
   }





   //setters
   /*public function Seti($variable,$value)
   {
      $this->$variable=$value;
   }
   //getters
   public function Geti($variable)
   {
      return $this->$variable;
   }*/

}// fin de la clase
?>