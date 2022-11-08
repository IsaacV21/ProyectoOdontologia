<?php 
	//echo "aqui";
	$id_cedulap="";
	$nombrep="";
	$apellidop="";
	$correop="";
	$fec_nacp="";
	$telmovil="";
	$tellocal="";
	$motcita="";
	$operacion="";
	/*echo $_POST['id_cedulap'];
	echo $_POST['operacion'];
	echo $_POST['nombrep'];
	echo $_POST['apellidop'];
	echo $_POST['correop'];
	echo $_POST['fec_nacp'];
	echo $_POST['telmovil'];
	echo $_POST['tellocal'];
	echo $_POST['motCita'];*/
	
	if (isset($_POST['operacion']))
	{
		$id_cedulap=$_POST['id_cedulap'];
		$operacion=$_POST['operacion'];
		$nombrep=$_POST['nombrep'];
		$apellidop=$_POST['apellidop'];
		$correop=$_POST['correop'];
		$fec_nacp=$_POST['fec_nacp'];
		$telmovil=$_POST['telmovil'];
		$tellocal=$_POST['tellocal'];
		$motcita=$_POST['motCita'];	    
	}

	

	if ($operacion != "") 
	{
		if ($operacion == "buscar") {
			$obj->setcedula($id_cedulap);
			if ($obj->buscar()) {
				$nombrep=$obj->getnombre();
				$apellidop=$obj->getapellido();
				$correop=$obj->getcorreo();
				$fec_nacp=$obj->getfecnac();
				$telmovil=$obj->gettelmovil();
				$tellocal=$obj->gettellocal();
				$motcita=$obj->getmotcita();
			}
		}
		if ($operacion == "guardar") {
			$obj->setcedula($id_cedulap);
			$obj->setnombre($nombrep);
			$obj->setapellido($apellidop);
			$obj->setcorreo($correop);
			$obj->setfecnac($fec_nacp);
			$obj->settelmovil($telmovil);
			$obj->settellocal($tellocal);
			$obj->setmotcita($motcita);
			$obj->guardar();
		}
		if ($operacion == "eliminar") {
			$obj->setcedula($id_cedulap);
			$obj->eliminar();
		}
		if ($operacion == "actualizar") {
			$obj->setcedula($id_cedulap);
			$obj->setnombre($nombrep);
			$obj->setapellido($apellidop);
			$obj->setcorreo($correop);
			$obj->setfecnac($fec_nacp);
			$obj->settelmovil($telmovil);
			$obj->settellocal($tellocal);
			$obj->setmotcita($motcita);
			$obj->actualiza();
			
		}
	}
?>