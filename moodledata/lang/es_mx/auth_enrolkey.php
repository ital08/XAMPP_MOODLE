<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_enrolkey', language 'es_mx', version '4.2'.
 *
 * @package     auth_enrolkey
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortsync'] = 'Sincronizar audiencias al apuntarse';
$string['cohortsync_description'] = 'Sincronizar audiencias del sistema cuando un usuario se apunta. Esto quita el retraso del cron que corre y hace este trabajo. Advertencia: esto podría causar que el proceso de apuntarse sea más lento.';
$string['description'] = 'Esto proporciona auto-registro con Inscripción basada en clave';
$string['edit_cohort'] = 'Editar tarea';
$string['edit_profile'] = 'Editar campos';
$string['edit_redirect'] = 'Editar URL';
$string['enrolkeyuse'] = 'Usar nueva clave de inscripción';
$string['errorenrolling'] = 'Hubo un error al inscribir en curso \'{$a->course}\'. El mensaje de error es: {$a->err}';
$string['heading_unsuspend'] = 'Su cuenta podría estar suspendida; por favor introduzca una clave de inscripción';
$string['label_cohortselect'] = 'seleccionar cohortes';
$string['label_cohortselect_empty'] = 'Sin cohortes seleccionadas';
$string['label_cohortselect_help'] = 'Buscar nombres de cohortes y IDs en este campo.';
$string['label_redirection'] = 'URL de redirección';
$string['label_redirection_help'] = 'La URL aquí introducida re-direccionará al usuario hacia el final de su auto-inscripción.<br/>
Este campo aceptará URLs absolutas y relativas.<br/>
Por favor recuerde incluir la diagonal inicial /cuando use una URL relativa.
<ul>
<li>Relativa: /curso/view.php?id=5</li>
<li>Absoluta: http://posiblemente.su.intranet/una/pagina</li>
</ul>';
$string['menumanage'] = 'Gestionar reglas de cohorte de enrolkey';
$string['menusettings'] = 'Configuraciones de enrolkey';
$string['noemail'] = '¡Se intentó enviarle un Email pero falló!';
$string['pluginname'] = 'Auto-registro basado en clave de inscripción';
$string['privacy:metadata'] = 'El plugin de autenticación enrolkey no almacena ningún dato personal.';
$string['privacy:metadata:auth_enrolkey'] = 'El plugin de autenticación enrolkey.';
$string['privacy:metadata:auth_enrolkey_cohort'] = 'La cohorte del plugin de autenticación enrolkey.';
$string['privacy:metadata:auth_enrolkey_cohort:usermodified'] = 'La ID del usuario de cohorte de autenticación enrolkey.';
$string['privacy:metadata:auth_enrolkey_profile'] = 'El perfil del plugin de autenticación enrolkey.';
$string['privacy:metadata:auth_enrolkey_profile:usermodified'] = 'La ID del usuario del perfil de autenticación por clave de inscripción.';
$string['privacy:metadata:auth_enrolkey_redirect'] = 'La re-dirección de  autenticación por clave de inscripción.';
$string['privacy:metadata:auth_enrolkey_redirect:usermodified'] = 'La ID del usuario de re-dirección de  autenticación por clave de inscripción.';
$string['recaptcha'] = 'Añade un elemento de confirmación visual/auditiva a la página para apuntarse para auto-registro de usuarios. Esto protege al sitio contra \'spammers\' y contribuye a una causa noble. Vea <a href="http://www.google.com/recaptcha">http://www.google.com/recaptcha</a> para más detalles.';
$string['recaptcha_key'] = 'Habilitar elemento reCAPTCHA';
$string['settings_content'] = 'p>Auto-registro basado en clave de inscripción habilita a un usuario para crear su propia cuenta mediante un botón para \'Crear nueva cuenta\' en la página de ingreso al sitio. el usuario recibirá entonces un Email que contiene un enlace seguro hacia  una página en donde puede confirmar sus cuenta. Los ingresos futuros solamente revisan el nombre_de_usuario y la contraseña con los valores almacenados en la BasedeDatos de Moodle.</p><p>Durante el auto-registro, si se ingresa una clave de inscripción dentro del campo para clave de inscripción, entonces se procederá a inscribir automáticamente al nuevo usuario dentro de los cursos que coincidan. Las claves de inscripción están habilitadas en (Administración del curso  > Usuarios > Métodos de inscripción > Añadir método > Auto inscripción).</p><p>Nota: Además de habilitar el plugin, el auto-registro basado en clave de inscripción debe también de estar seleccionado dentro del menú desplegable en la página para \'Gestionar autenticación\'.</p>';
$string['settings_email_description'] = 'Forzar usuarios a confirmar su cuenta con un Email antes de acceder a cursos inscritos.
<ul>
<li>No - No se requiere Email de confirmación.</li>
<li>Si - Se otorgará el acceso inicial. Sin embargo, los usuarios necesitan confirmar su cuenta vía Email antes del siguiente intento de ingreso.</li>
</ul>';
$string['settings_email_title'] = 'Requerir confirmación por Email';
$string['settings_heading'] = 'Configuraciones generales';
$string['settings_partial'] = 'Parcial';
$string['settings_required_description'] = 'La clave para inscripción será un campo obligatorio para validación';
$string['settings_required_title'] = 'Requerir clave de inscripción para validación';
$string['settings_visible_description'] = 'Añade un nuevo elemento de formato a la página para apuntarse para el auto-registro de usuarios. Esto será revisado contra las claves de inscripción disponibles e inscribirá al usuario dentro de los cursos que correspondan.';
$string['settings_visible_title'] = 'Habilitar elemento de clave de inscripción';
$string['signup_auth_instructions'] = '¡Hola! Para el acceso completo a los cursos, Usted necesitará tomarse un minuto para crearse una nueva cuenta Usted mismo en este sitio web. Cada uno de nuestros cursos individuales puede tener su propia "clave de inscripción" para emplearse una sola vez, la cual Usted podrá usar durante este registro:
<ol>
<li>LLene el formato para una <a href="{$a}">Nueva Cuenta</a> con su información.</li>
<li>A Usted se le pedirá una "clave de inscripción" - use la que le proporcionó su ´profesor. Esta clave lo "inscribirá" a Usted dentro del curso.</li>
<li>Se creará su cuenta y Usted será ingresado al sitio.</li>
<li>Entonces Usted podrá acceder a todo el curso por esta sesión.</li>
<li>Inmediatamente se le enviará a Usted un Email a su dirección de Email.</li>
<li>Lea su correo y haga click en el enlace web que contiene.</li>
<li>De allí en eadelante Usted solamente necesitará ingresar su nombre_de_usuario y su contraseña personales (en el formato en esta página) para ingresar al sitio y acceder a cualquier curso(s) en que se hubiera inscrito.</li>
</ol>';
$string['signup_failure'] = '¡Órale! Algo salió mal y es posible que Usted no haya sido inscrito apropiadamente. Vaya a  <a href="{$a->href}">Página inicial</a>';
$string['signup_field_title'] = 'Clave de inscripción';
$string['signup_missing'] = 'Falta clave de inscripción';
$string['signup_token_invalid'] = 'La clave de inscripción que Usted introdujo es inválida';
$string['signup_view'] = 'Inscripción a curso';
$string['signup_view_message_basic'] = 'Usted ha sido inscrito a  como un {$a->role} en el curso  \'<a href="{$a->href}">{$a->course}</a>\'';
$string['signup_view_message_basic_dates'] = 'Usted se ha inscrito a {$a->course} como un {$a->role}. <a href={$a->href}>Haga click aquí para ver el curso.</a><br />El curso inicia en: {$a->startdate}<br />El curso termina en: {$a->enddate}';
$string['signup_view_message_basic_dates_endonly'] = 'Usted se ha inscrito a {$a->course} como un {$a->role}. <a href={$a->href}>Haga click aquí para ver el curso.</a><br />El curso termina en: {$a->enddate}';
$string['signup_view_message_basic_dates_startonly'] = 'Usted se ha inscrito a $a->course} como un {$a->role}. <a href={$a->href}>Haga click aquí para ver el curso.</a><br />El curso inicia en: {$a->startdate}';
$string['suspendeduseratsignup'] = '<br />¿Pudiera ser que su cuenta exista pero esté suspendida? <a href="{$a->href}">Por favor apúntese aquí con una nueva clave de inscripción</a>';
$string['th_cohorts'] = 'Cohortes asignadas';
$string['th_enrolkeyname'] = 'Nombre de enrolkey.';
$string['th_fullname'] = 'Nombre completo del curso';
$string['th_profilefields'] = 'Campos del perfil';
$string['th_redirecturl'] = 'URL de redirección';
$string['title_cohort'] = 'Editar asignación de cohorte';
$string['title_profile'] = 'Editar campos del perfil';
$string['title_redirect'] = 'Editar URL de redireccionamiento';
$string['title_unsuspend'] = 'Cuenta suspendida';
$string['unsuspendaccounts'] = 'Des-suspender cuenta con un enrolkey válido';
$string['unsuspendaccounts_description'] = 'En el ingreso al sitio, si un usuario está suspendido, y está usando el tipo de autenticación con clave de inscripción, re-direccionarlo a una página intermedia que le pida su nombre_de_usuario, contraseña y clave de inscripción para des-suspenderlo.';
