f=document.form1;
function busca()
{
	f.operacion.value = "buscar";
	f.submit();
};

function limpiar() {
	f.operacion.value = "";
	f.id_horario.value = "";
	f.hora_ent.value = "";
	f.hora_sal.value = "";
	f.dia.value = "";
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