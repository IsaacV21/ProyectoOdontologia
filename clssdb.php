<?php
class clssdb
{
   var $con;
   var $servidor; 
   var $usuario; 
   var $clave; 
   var $basedatos;

   function __construct()
	{
		$this->servidor="localhost";
		$this->usuario="root";
		$this->clave="";
		$this->basedatos="CopSCDB";
	}

	function abrir()
	{
		$this->con = new mysqli($this->servidor, $this->usuario, $this->clave, $this->basedatos);
		if ($this->con->connect_errno) 
		{
			error_log('Connection error: ' . mysqli_connect_errno());
			exit();
		}
	}
	
	function select($sql)
	{
	    if ($tb = $this->con->query($sql)) 
		{
		  return $tb;
		}
		else
		{
			return false;   
	    }
	}

	function siguiente($tb)
	{
	   $fila=$tb->fetch_array();
	   return $fila;
	}

	function ejecutar($sql)
	{
	    if ($tb = $this->con->query($sql)) 
		{
		  $n=$tb->num_rows($sql);
		  return $n;
		}
	}
	function cerrar($tb=0)
   {
   	 try
   	  {
   	  	 mysqli_close($this->con);
     	}
     catch(Exception $e)
     {
     	return 0;
     } 
   }

   function generarcodigo($tabla,$campo)
	  {
	   $aux="1";
		 $sql= "select max($campo) as mayor from $tabla";
		 $this->abrir();
		 $tb=$this->select($sql);
		 if ($row=$this->siguiente($tb))
		 {
		    // convierte de string a numero colocandole el 0
		    $aux=(0+$row["mayor"])+1;
		 }
		 //$this->cerrar();
		 // aqui convierte de numero a string colocandole el punto que es el operardor de concatenación
		 //$aux="".$aux;
		 //$aux=$this->completarcerosizquierda($aux,$longitud);
		 return $aux;
	  }
}
?>