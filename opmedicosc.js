f=document.form1;
function busca()
{
	f.operacion.value = "buscar";
	f.submit();
};

function limpiar() {
	f.operacion.value = "";
	f.id_cedulam.value = "";
	f.nombrem.value = "";
	f.apellidom.value = "";
	f.direccionm.value = "";
	f.correom.value = "";
	f.fec_nacm.value = "";
	f.telmovilm.value = "";
	f.tellocalm.value = "";
	f.submit();
}

function guardar() {
	alert("Registro Guardado Exitosamente");
	f.operacion.value = "guardar";
	f.submit();
}

function eliminar() {
	alert("Registro Eliminado");
	f.operacion.value = "eliminar";
	f.submit();
}

function actualizar() {
	alert("Registro Modificado");
	f.operacion.value = "actualizar";
	f.submit();
}