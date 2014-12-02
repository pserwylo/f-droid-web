<?php
include_once(LANG.DIRECTORY_SEPARATOR.'languages.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'categories.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'licenses.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'permissions.php');
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'afeatures.php');
$lang = array(
	'iface' => array( //{{{
		'language' => 'Idioma',
		'version' => 'Versión',
		'past_versions' => 'Versiones Anteriores',
		'added' => 'Añadido el',
		'size' => 'Peso',
		'desc' => 'Descripción',
		'license' => 'Licencias',
		'license_list' => 'Lista de la licencias',
		'categories' => 'Categorías',
		'categories_list' => 'Lista de las categorías',
		'reset' => 'Reinicializar',
		'form_reset' => "Reinicializar la busqueda",
		'updated' => 'Modificado el',
		'summary' => 'Resumen',
		'permissions' => 'Permisos',
		'download' => 'Descargar',
		'antifeatures' => 'Características negativas',
		'donate' => 'Dar',
		'bitcoin' => 'Bitcoin',
		'flattr' => 'Flattr',
		'hash' => 'Hash',
		'requirements' => 'Requisitos',
		'alt_cat_link' => 'Seleccione una aplicación de la categoría',
		'all_categories' => 'Todas las categorías',
		'alt_lic_link' => 'Seleccione una aplicación con la licencia',
		'all_licenses' => 'Todas las licencias',
		'word_search' => 'Nombre / resumen / descripción',
		'form_val' => 'Buscar',
		'form_field' => 'Buscar valor',
		'menu' => 'Menú',
		'share' => 'Compartir este contenido con',
		'sdkver' => 'SDK',
		'tracker' => 'Seguimiento',
		'web' => 'Sitio web',
		'sources' => 'Código base',
		'page' => 'Páginas',
		'go_to_page' => 'Ir a la página',
		'qrcode_repo' => "Escanea este Código QR para instalar este repositorio en su aplicación f-droid",
		'back' => 'Volver a la lista',
		'applist' => 'Aplicaciones',
		'lastapplist' => 'Ultimas aplicaciones',
		'ret_menu' => 'Regresar al menú',
		'access_applist' => "Acceso a la lista de aplicaciones",
		'access_appsheet' => "Acceso a los detalles de la aplicacion",
		'access_lastapplist' => "Acceso a la lista de las últimas aplicaciones",
		'access_form_val' => "Acceso al formulario de búsqueda",
		'access_error_mess' => "Acceso al mensaje de error",
		'browse_lic' => "Acceso al Filtró por licencias",
		'browse_cat' => "Acceso al Filtró por categorías",
		'sheet' => 'Visualizar',
		'last_modified' => 'Ultima modificación',
		'nbr_result' => 'Número de resultados',
		'warning_label' => "Señal de advertencia",
		'warning_msg' => "Cuidado: Este sitio web esta en un modo de emergencia. Las informaciónes pueden ser incompletas. Lo sentimos.",
		'no_result' => "No aplicación se ha encontrado con los criterios que usted ha elegido.",
		'error_label' => 'Error',
		'error_message' => "Ooops, este depósito de aplicaciónes no está disponible temporalmente. Lo sentimos, por favor, inténtalo de nuevo más tarde...",
		'error_message_sheet' => "Ooops, la ficha de la aplicación que ha solicitado no existe..."), //}}}
	'lang' => $languages_list,
	'perms' => $permissions_list,
	'cat' => $categories_list,
	'afeat' => $afeatures_list,
	'lic' => $licenses_list
);
?>
