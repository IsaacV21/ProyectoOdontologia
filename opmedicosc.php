<?php 
	//echo "aqui";
	$id_cedulam="";
	$nombrem="";
	$apellidom="";
	$direccionm="";
	$correom="";
	$fec_nacm="";
	$telmovilm="";
	$tellocalm="";
	$operacion="";
	
	if (isset($_POST['operacion']))
	{
		$id_cedulam=$_POST['id_cedulam'];
		$nombrem=$_POST['nombrem'];
		$apellidom=$_POST['apellidom'];
		$direccionm=$_POST['direccionm'];
		$correom=$_POST['correom'];
		$fec_nacm=$_POST['fec_nacm'];
		$telmovilm=$_POST['telmovilm'];
		$tellocalm=$_POST['tellocalm'];
		$operacion=$_POST['operacion'];	   
	}	

	if ($operacion != "") 
	{
		if ($operacion == "buscar") {
			$obj->seti('id_cedulam',$id_cedulam);
			if ($obj->buscar()) {
				$nombrem=$obj->geti('nombrem');
				$apellidom=$obj->geti('apellidom');
				$direccionm=$obj->geti('direccionm');
				$correom=$obj->geti('correom');
				$fec_nacm=$obj->geti('fec_nacm');
				$telmovilm=$obj->geti('telmovilm');
				$tellocalm=$obj->geti('tellocalm');
			}
		}
		if ($operacion == "guardar") {
			$obj->seti('id_cedulam',$id_cedulam);
			$obj->seti('nombrem',$nombrem);
			$obj->seti('apellidom',$apellidom);
			$obj->seti('direccionm',$direccionm);
			$obj->seti('correom',$correom);
			$obj->seti('fec_nacm',$fec_nacm);
			$obj->seti('telmovilm',$telmovilm);
			$obj->seti('tellocalm',$telmovilm);
			$obj->guardar();
		}
		if ($operacion == "eliminar") {
			$obj->seti('id_cedulam',$id_cedulam);
			$obj->eliminar();
		}
		if ($operacion == "actualizar") {
			$obj->seti('id_cedulam',$id_cedulam);
			$obj->seti('nombrem',$nombrem);
			$obj->seti('apellidom',$apellidom);
			$obj->seti('direccionm',$direccionm);
			$obj->seti('correom',$correom);
			$obj->seti('fec_nacm',$fec_nacm);
			$obj->seti('telmovilm',$telmovilm);
			$obj->seti('tellocalm',$telmovilm);
			$obj->actualiza();			
		}
	}
?>