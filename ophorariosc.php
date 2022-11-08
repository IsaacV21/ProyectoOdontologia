<?php 
	$id_horario="";
	$hora_ent="";
	$hora_sal="";
	$dia = "";
	$operacion="";
	
	if (isset($_POST['operacion']))
	{
		$id_horario=$_POST['id_horario'];
		$hora_ent=$_POST['hora_ent'];
		$hora_sal=$_POST['hora_sal'];
		$dia=$_POST['dia'];
		$operacion=$_POST['operacion'];  
	}	

	if ($operacion != "") 
	{
		if ($operacion == "buscar") {
			$obj->seti('id_horario',$id_horario);
			if ($obj->buscar()) {
				$hora_ent=$obj->geti('hora_ent');
				$hora_sal=$obj->geti('hora_sal');
				$dia=$obj->geti('dia');
			}
		}
		if ($operacion == "guardar") {
			$obj->seti('hora_ent',$hora_ent);
			$obj->seti('hora_sal',$hora_sal);
			$obj->seti('dia',$dia);
			$obj->guardar();
		}
		if ($operacion == "eliminar") {
			$obj->seti('id_horario',$id_horario);
			$obj->eliminar();
		}
		if ($operacion == "actualizar") {
			$obj->seti('id_horario',$id_horario);
			$obj->seti('hora_ent',$hora_ent);
			$obj->seti('hora_sal',$hora_sal);
			$obj->seti('dia',$dia);
			$obj->actualiza();
			
		}
	}
?>