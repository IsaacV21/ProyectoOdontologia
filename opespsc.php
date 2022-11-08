<?php 
	//echo "aqui";
	$id_esp="";
	$nom_esp="";
	$desc_esp="";
	$operacion="";
	
	if (isset($_POST['operacion']))
	{
		$id_esp=$_POST['id_esp'];
		$operacion=$_POST['operacion'];
		$nom_esp=$_POST['nom_esp'];
		$desc_esp=$_POST['desc_esp'];    
	}	

	if ($operacion != "") 
	{
		if ($operacion == "buscar") {
			$obj->seti('nom_esp',$nom_esp);
			if ($obj->buscar()) {
				$id_esp=$obj->geti('id_esp');
				$nom_esp=$obj->geti('nom_esp');
				$desc_esp=$obj->geti('desc_esp');
			}
		}
		if ($operacion == "guardar") {
			$obj->seti('id_esp',$id_esp);
			$obj->seti('nom_esp',$nom_esp);
			$obj->seti('desc_esp',$desc_esp);
			$obj->guardar();
		}
		if ($operacion == "eliminar") {
			$obj->seti('id_esp',$id_esp);
			$obj->eliminar();
		}
		if ($operacion == "actualizar") {
			$obj->seti('id_esp',$id_esp);
			$obj->seti('nom_esp',$nom_esp);
			$obj->seti('desc_esp',$desc_esp);
			$obj->actualiza();
			
		}
	}
?>