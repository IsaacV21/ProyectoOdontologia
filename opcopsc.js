f=document.form1;
function busca()
{
	f.operacion.value = "buscar";
	f.submit();
};

function limpiar() {
	f.operacion.value = "";
	f.id_cedulap.value = "";
	f.nombrep.value = "";
	f.apellidop.value = "";
	f.correop.value = "";
	f.fec_nacp.value = "";
	f.telmovil.value = "";
	f.tellocal.value = "";
	f.motCita.value = "";
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
	//alert("Registro Modificado");
	f.operacion.value = "actualizar";
	f.submit();
}