window.addEventListener('load', inicio, true);

function inicio(){

	document.getElementById("bars_menu").addEventListener('click', ir_menu, true);
	document.getElementById("cerrar_menu").addEventListener('click', salir_menu, true);

}

function ir_menu(){

	document.getElementById("menu_oculto").id = "ver_menu";
	document.getElementById("contenedor").id = "contenedor_oculto";

}

function salir_menu(){

	document.getElementById("ver_menu").id = "menu_oculto";
	document.getElementById("contenedor_oculto").id = "contenedor";

}