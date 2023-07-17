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
 * Strings for component 'tool_usertours', language 'es_mx', version '4.2'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Arriba';
$string['actions'] = 'Acciones';
$string['appliesto'] = 'Aplica a';
$string['backdrop'] = 'Mostrar con sombreado';
$string['backdrop_help'] = 'Usted puede usar un sombreado para resaltar la parte de la página a la que Usted está apuntando.

Nota: Los sombreados no son compatibles con algunas partes de la página, como por ejemplo la Barra de Navegación.';
$string['below'] = 'Debajo';
$string['block'] = 'Bloque';
$string['block_named'] = 'Bloque nombrado \'{$a}\'';
$string['cachedef_stepdata'] = 'Lista de pasos de Tours para Usuario';
$string['cachedef_tourdata'] = 'Lista de información de Tours para Usuario habilitados que son buscados en cada página';
$string['confirmstepremovalquestion'] = '¿Está Usted seguro de querer quitar este paso?';
$string['confirmstepremovaltitle'] = 'Confirmar eliminación de paso';
$string['confirmtourremovalquestion'] = '¿Está Usted seguro de querer quitar este tour?';
$string['confirmtourremovaltitle'] = 'Confirmar eliminación de tour';
$string['content'] = 'Contenido';
$string['content_heading'] = 'Contenido';
$string['content_help'] = 'El contenido que describe el  paso puede añadirse como texto simple, rodeado por marcas multi-idioma (para usarse con el filtro de contenido multi-idioma) si se requiere.';
$string['content_type'] = 'Tipo de contenido';
$string['content_type_help'] = '* Manual - el contenido es ingresado usando un editor de texto
*  ID de la cadena de caracteres del idioma - en el formato de identificador de cadena de caracteres, componente (sin espacio después de la coma)';
$string['content_type_langstring'] = 'ID de cadena de caracteres del idioma';
$string['content_type_manual'] = 'Manual';
$string['cssselector'] = 'Selector CSS';
$string['defaultvalue'] = 'Valor por defecto ({$a})';
$string['delay'] = 'Retraso antes de mostrar el paso';
$string['delay_help'] = 'Usted puede opcionalmente elegir añadir un retraso antes de que se muestre un paso.

Este retraso es en milisegundos.';
$string['description'] = 'Descripción';
$string['description_help'] = 'La descripción de un tour puede ser añadida como texto simple, rodeado por marcas multilang (para usar con el filtro de contenido multi-idioma) si fuera necesario.

De forma alterna, se puede escribir la ID de una cadena de caracteres del idioma en el formato identificador.componente (sin usar paréntesis ni espacio después de la coma).';
$string['displaystepnumbers'] = 'Mostrar números de paso';
$string['displaystepnumbers_help'] = 'Si es que se muestra no un número de paso restantes, como por ejemplo 1/4, 2/4. etc para indicar la extensión del tour de usuario.';
$string['done'] = 'Hecho';
$string['duplicatetour'] = 'Tour duplicado';
$string['duplicatetour_name'] = '{$a} (copia)';
$string['editstep'] = 'Editando "{$a}"';
$string['enabled'] = 'Habilitado';
$string['endonesteptour'] = 'Ya entendí';
$string['endtour'] = 'Terminar tour';
$string['endtourlabel'] = 'Etiqueta del botón para terminar tour';
$string['endtourlabel_help'] = 'Usted puede opcionalmente especificar una etiqueta personalizada para el botón para terminar el tour. La etiqueta predefinida es "Ya entendí" para paso único, y "Terminar tour" para tours de varios pasos.

De forma alterna, una ID de cadena de caracteres del idioma puede ser ingresada en el formato identificador,componente (sin paréntesis ni espacio después de la coma).';
$string['event_step_shown'] = 'Paso mostrado';
$string['event_tour_ended'] = 'Tour terminado';
$string['event_tour_reset'] = 'Tour reiniciado';
$string['event_tour_started'] = 'Tour iniciado';
$string['exporttour'] = 'Exportar tour';
$string['filter_accessdate'] = 'Fecha de acceso';
$string['filter_accessdate_enabled'] = 'Habilitar filtro de fecha de acceso';
$string['filter_accessdate_enabled_help'] = 'Mostrar el tour solamente a nuevos usuarios que hayan accedido al sitio recientemente.';
$string['filter_category'] = 'Categoría';
$string['filter_category_help'] = 'Mostrar el tour en una página que está asociada con un curso en la categoría seleccionada.';
$string['filter_course'] = 'Cursos';
$string['filter_course_help'] = 'Mostrar el tour en una página que está asociada con el curso seleccionado.';
$string['filter_courseformat'] = 'Formato del curso';
$string['filter_courseformat_help'] = 'Mostrar el tour en una página que está asociada con un curso usando el formato de curso seleccionado.';
$string['filter_cssselector'] = 'Selector de CSS';
$string['filter_cssselector_help'] = 'Solamente mostrar el tour cuando el selector de CSS especificado sea encontrado en la página.';
$string['filter_date_account_creation'] = 'Fecha de creación de cuenta dentro de';
$string['filter_date_first_login'] = 'Fecha de primer acceso de usuario dentro de';
$string['filter_date_last_login'] = 'Fecha de último acceso de usuario dentro de';
$string['filter_header'] = 'Filtros del tour';
$string['filter_help'] = 'Selecione las condiciones bajo las que se mostrará el tour. Todos los filtros deben de coincidir para que un tour se le muestre a un usuario.';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Un tour puede estar restringido a usuarios con roles seleccionados en el contexto en donde se muestra el tour. Por ejemplo, el restringir un tour del Tablero a usuarios con el rol de estudiante no funcionará si los usuarios tienen el rol de estudiante en un curso (como generalmente sucede). Un tour del Tablero solamente puede restringirse a usuarios con un rol del sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Mostrar el tour cuando el usuario esté usando uno de los temas seleccionados.';
$string['importtour'] = 'Importar tour';
$string['invalid_lang_id'] = 'ID de cadena de caracteres del idioma inválido';
$string['left'] = 'Izquierda';
$string['modifyshippedtourwarning'] = 'Este es un tour para usuario que se ha incluido con Moodle. Cualquier modificación que Usted le haga puede ser anulada durante su siguiente actualización del sitio.';
$string['moodle_language_identifier'] = 'ID de cadena de caracteres del idioma';
$string['movestepdown'] = 'Mover paso hacia abajo';
$string['movestepup'] = 'Mover paso hacia arriba';
$string['movetourdown'] = 'Mover tour hacia abajo';
$string['movetourup'] = 'Mover tour hacia arriba';
$string['name'] = 'Nombre';
$string['name_help'] = 'El nombre de un tour puede ser añadido como texto simple, rodeado por marcas multilang (para usar con el filtro de contenido multi-idioma) si fuera necesario.

De forma alterna, se puede escribir la ID de una cadena de caracteres del idioma en el formato identificador.componente (sin usar paréntesis ni espacio después de la coma).';
$string['newstep'] = 'Nuevo paso';
$string['newtour'] = 'Crear un nuevo tour';
$string['next'] = 'Siguiente';
$string['nextstep'] = 'Siguiente';
$string['nextstep_sequence'] = 'Siguiente ({$a->position}/{$a->total})';
$string['options_heading'] = 'Opciones';
$string['orphan'] = 'Mostrar si no se encontró el destino';
$string['orphan_help'] = 'Mostrar el paso si no pudo encontrarse el destino en la página.';
$string['pathmatch'] = 'Aplicar a la coincidencia de URL';
$string['pathmatch_help'] = 'Los tours serán mostrados en cualquier página cuya URL coincida con este valor.

Usted puede usar el caracter  % como un comodín para significar cualquier cosa. Algunos valores de ejemplo incluyen:

* /my/% - para coincidir con el Tablero
* /course/view.php?id=2 - para coincidir con un curso específico
* /mod/forum/view.php% - para coincidir con la lista de discusión del foro
* /user/profile.php% - para coincidir con la página del perfil del usuario

Si Usted quisiera mostrar un tour en la Página inicial del Sitio (hogar/portada), Usted puede usar el valor: "FRONTPAGE".';
$string['pausetour'] = 'Pausar';
$string['placement'] = 'Posicionamiento';
$string['placement_help'] = 'Un paso puede colocarse, ya sea arriba, debajo, a la izquierda del, o a la derecha del destino. Se recomienda arriba de o debajo de, porque estos se ajustan mejor para visualizarse en dispositivos móviles.

Si el paso no cupiera en una página particular en el sitio especificado, será colocado automáticamente en otra parte.';
$string['pluginname'] = 'Tours para usuarios';
$string['previousstep'] = 'Anterior';
$string['privacy:metadata:preference:completed'] = 'La hora en la que un usuario completó por vez última un tour para usuario.';
$string['privacy:metadata:preference:requested'] = 'La hora en la que un usuario solicitó manualmente por última vez un tour para usuario.';
$string['privacy:request:preference:completed'] = 'Usted marcó por última vez el tour para usuario "{$a->name}" como completado en {$a->time}';
$string['privacy:request:preference:requested'] = 'Usted solicitó por última vez el tour para usuario  "{$a->name}" en {$a->time}';
$string['reflex'] = 'Proceder al hacer clic';
$string['reflex_help'] = 'Proceder al siguiente paso cuando se hace click sobre el destino.';
$string['resettouronpage'] = 'Reiniciar tour para usuario en esta página';
$string['resumetour'] = 'Continuar';
$string['right'] = 'Derecha';
$string['select_block'] = 'Seleccionar un bloque';
$string['selector_defaulttitle'] = 'Ingresar un título descriptivo';
$string['selectordisplayname'] = 'Un selector CSS que coincida con \'{$a}\'';
$string['selecttype'] = 'Seleccionar tipo de paso';
$string['sharedtourslink'] = 'Repositorio de tours';
$string['skip'] = 'Saltar';
$string['skip_tour'] = 'Saltar tour';
$string['target'] = 'Destino';
$string['target_block'] = 'Bloque';
$string['target_heading'] = 'Destino del Paso';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'Selectores CSS';
$string['target_selector_targetvalue_help'] = 'Se puede usar un Selector CSS para dirigirse a casi cualquier elemento de la página. El selector apropiado puede encontrarse fácilmente usando las herramientas para desarrollador de su navegador de Internet.';
$string['target_unattached'] = 'Mostrar a la mitad de la página';
$string['targettype'] = 'Tipo de destino';
$string['targettype_help'] = 'Cada paso está asociado con una parte de la página - el destino. Los tipos de  destinos son:.

* Bloque - para mostrar un paso junto a un bloque especificado
* Selector CSS - para definir con precisión el área destino usando CSS
* Mostrar a la mitad de la página - para un paso que no necesita estar asociado con una parte especifica de la página';
$string['title'] = 'Título';
$string['title_help'] = 'El título de un paso puede añadirse como texto simple, rodeado por marcas multi-idioma (para usarse con el filtro de contenido multi-idioma) si se necesita.

Alternativamente, puede ingresarse una ID de cadena-de-caracteres del idioma en el formato de identificador,componente (sin paréntesis ni espacio después de la coma).';
$string['tour1_content_addingblocks'] = 'De hecho, piense cuidadosamente acerca de incluir algun bloque en sus páginas. Los bloques no se muestran en la App Moodle, por lo que, como regla general, es mucho mejor asegurarse de que el sitio funciona bien sin ningún bloque.';
$string['tour1_content_blockregion'] = 'Todavía hay una región de bloque aquí. Nosotros recomendamos quitar los bloques de Navegación y Administración completamente, porque toda la funcionalidad está en otra parte en el tema Boost (Impulso).';
$string['tour1_content_customisation'] = 'Para personalizar  la apariencia de su sitio y de la página inicial del sitio, use el menú de configuraciones en la esquina de este encabezado. Intente activar la edición ahora mismo.';
$string['tour1_content_end'] = 'Este es el final de su tour para usuario. No volverá a mostrarse a menos de que Usted lo reinicie usando el enlace en el pie de página. ¡Como administrador, Usted también puede crear sus propios tours como este!';
$string['tour1_content_navigation'] = 'Ahora la navegación principal es mediante este cajón de navegación. Los contenidos se actualizan dependiendo de en donde está Usted dentro del sitio. Use el botón en la parte superior para ocultarlo o mostralo.';
$string['tour1_content_welcome'] = 'Bienvenido al tema Boost (Impulso). Si Usted ha actualizado desde una versión anterior, Usted podría encontrar que varias cosas se ven un poco diferentes con este tema.';
$string['tour1_title_addingblocks'] = 'Añadiendo bloques';
$string['tour1_title_blockregion'] = 'Región de bloque';
$string['tour1_title_customisation'] = 'Personalización';
$string['tour1_title_end'] = 'Fin del tour';
$string['tour1_title_navigation'] = 'Navegación';
$string['tour1_title_welcome'] = 'Bienvenido';
$string['tour2_content_addblock'] = 'Si Usted habilita el modo de edición, Usted puede añadir bloques desde el cajón de navegación. Sin embargo, piense cuidadosamente acerca de incluir algun bloque en sus páginas. Los bloques no se muestran en la App Moodle, por lo que para una mejor experiencia para el usuario, sería mucho mejor que Usted se asegure de que su curso funciona bien sin ningún bloque.';
$string['tour2_content_addingblocks'] = 'Usted puede añadir bloques a esta página usando este botón. Sin embargo, piense cuidadosamente acerca de incluir algún bloque en sus páginas. Los bloques no se muestran en la App Moodle, por lo que para una mejor experiencia para el usuario, sería mucho mejor que Usted se asegure de que su curso funciona bien sin ningún bloque.';
$string['tour2_content_customisation'] = 'Para cambiar cualquier configuración del curso, use el menú de configuraciones en la esquina de este encabezado. Usted también encontrará un menú similar de configuraciones en la página inicial de cada actividad. Intente activar la edición ahora mismo.';
$string['tour2_content_end'] = 'Este es el fin de su tour para usuario. No volverá a mostrarse a menos de que Usted lo reinicie usando el enlace en el pie de página. El administrador del sitio también puede crear más tours para este sitio si lo necesitara.';
$string['tour2_content_navigation'] = 'La navegación es ahora mediante este cajón de navegación. Use el botón en la parte superior para ocultarlo o mostrarlo. Usted verá que hay enlaces para las secciones de su curso.';
$string['tour2_content_opendrawer'] = 'Intentar abrir el cajón de navegación ahora.';
$string['tour2_content_participants'] = 'Ver aquí a los participantes. Aquí es donde Usted irá para añadir o quitar estudiantes.';
$string['tour2_content_welcome'] = 'Bienvenido al tema Boost. Si su sitio ha sido actualizado desde una versión anterior, Usted podría encontrar cosas que se ven un poco diferentes aquí en la página del curso.';
$string['tour2_title_addblock'] = 'Añadir un bloque';
$string['tour2_title_addingblocks'] = 'Añadiendo bloques';
$string['tour2_title_customisation'] = 'Personalización';
$string['tour2_title_end'] = 'Fin del tour';
$string['tour2_title_navigation'] = 'Navegación';
$string['tour2_title_opendrawer'] = 'Abrir el cajón de navegación';
$string['tour2_title_participants'] = 'Participantes del curso';
$string['tour2_title_welcome'] = 'Bienvenido';
$string['tour3_content_dashboard'] = 'Su nuevo Tablero tiene muchas características para ayudarle a que acceda fácilmente a la información más importante para Usted.';
$string['tour3_content_displayoptions'] = 'Los cursos pueden ser ordenados por nombre del curso, nombre corto del curso, o por fecha de último acceso.

Usted también puede elegir mostrar los cursos en una lista, con información resumida, o la vista por defecto de \'tarjeta\'.';
$string['tour3_content_overview'] = 'El bloque de Vista general del curso muestra todos los cursos en los cuales Usted está inscrito.

Usted puede elegir mostrar cursos actualmente en progreso, o en el pasado, o en el futuro, o cursos a los cuales Usted los ha destacado.';
$string['tour3_content_recentcourses'] = 'El bloque de cursos recientemente accedidos muestra los últimos cursos que Usted visitó, permitiéndole saltar a ellos directamente.';
$string['tour3_content_starring'] = 'Usted puede elegir marcar con estrella un curso para hacerlo resaltar, o puede ocultar un curso que ya no es importante para Usted.

Estas acciones solamente afectan a su vista.

Usted puede también elegir mostrar  los cursos en una lista, o con información resumida, o la vista de \'tarjeta\' por defecto.';
$string['tour3_content_timeline'] = 'El bloque de línea de tiempo muestra sus eventos próximos importantes.

Usted puede elegir mostrar actividades en la próxima semana, mes o más allá en el futuro.

Usted también puede mostrar elementos que están vencidos.';
$string['tour3_title_dashboard'] = 'Su Tablero';
$string['tour3_title_displayoptions'] = 'Mostrar opciones';
$string['tour3_title_overview'] = 'Vista general del curso';
$string['tour3_title_recentcourses'] = 'Cursos accedidos recientemente';
$string['tour3_title_starring'] = 'Marcar como favoritos y ocultar cursos';
$string['tour3_title_timeline'] = 'Bloque de línea de tiempo';
$string['tour4_content_groupconvo'] = 'Si Usted es un miembro de un grupo con la mensajería grupal habilitada, Usted verá aquí las conversaciones del grupo.

Las conversaciones del grupo del curso le permiten interactuar con los demás en su grupo en un sitio privado y conveniente.';
$string['tour4_content_icon'] = 'Usted puede acceder a sus mensajes desde cualquier página usando este ícono.

Si Usted tiene algún mensaje sin leer, el número de mensajes sin leer se mostrará también aquí.

Haga clic sobre el ícono para abrir el cajón de mensajería y continuar el tour.';
$string['tour4_content_messaging'] = 'Nuevas características de mensajería incluyen mensajería grupal dentro de un curso y un mejor control sobre quien puede enviarle mensajes a Usted.';
$string['tour4_content_settings'] = 'Usted puede acceder a sus configuraciones de mensajería vía el ícono del engrane. Una nueva configuración de privacidad le permite restringir quien puede mandarle mensajes a Usted.';
$string['tour4_content_starred'] = 'Usted puede elegir señalar con estrella conversaciones particulares para hacerlas más fáciles de encontrar.';
$string['tour4_title_groupconvo'] = 'Mensajes del grupo';
$string['tour4_title_icon'] = 'Mensajería';
$string['tour4_title_messaging'] = 'Nueva interfaz de mensajería';
$string['tour4_title_settings'] = 'Configuraciones de mensajería';
$string['tour4_title_starred'] = 'Destacado';
$string['tour_activityinfo_activity_student_content'] = 'Las fechas de la actividad y qué hacer para completar la actividad se muestran en la página de la actividad.';
$string['tour_activityinfo_activity_student_title'] = 'Nuevo: Información de actividad';
$string['tour_activityinfo_activity_teacher_content'] = 'Fechas de actividad y condiciones de finalización ahora son mostrados para estudiantes en cada página de actividad (y opcionalmente en la página del curso).

Para actividades que requieren que los estudiantes las marquen manualmente como completadas, un botón \'Marcar como hecha\' es mostrado en la página de la actividad.';
$string['tour_activityinfo_activity_teacher_title'] = 'Nuevo: Información de actividad';
$string['tour_activityinfo_course_student_content'] = 'Las fechas de actividad y qué hacer para completar la actividad son mostrados en la página del curso.';
$string['tour_activityinfo_course_student_title'] = 'Nuevo: Información de actividad';
$string['tour_activityinfo_course_teacher_content'] = 'Nuevas configuraciones del curso "Mostrar condiciones de finalización" y "Mostrar fechas de actividad" le permiten a Usted elegir si las condiciones de finalización de actividad (si estuviesen configuradas) y/o las fechas, son mostradas para estudiantes en la página del curso.';
$string['tour_activityinfo_course_teacher_title'] = 'Nuevo: Información de actividad';
$string['tour_final_step_content'] = 'Este es el fin de su tour de usuario. No se mostrará de nuevo a menos que Usted lo reinicie usando el enlace en el pie de página.';
$string['tour_final_step_title'] = 'Fin del tour';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Publique aquí avisos importantes.';
$string['tour_navigation_course_announcements_teacher_title'] = '¿Algo para decirle a todos?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Añada nuevo contenido o edite el contenido existente.';
$string['tour_navigation_course_edit_teacher_title'] = 'Activar modo de edición';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Mire mediante actividades y monitoree su progreso.';
$string['tour_navigation_course_index_student_title'] = 'Oriéntese';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Arrastrar y soltar actividades para re-ordenar contenidos del curso.';
$string['tour_navigation_course_index_teacher_title'] = 'Reglas del curso';
$string['tour_navigation_course_student_tour_des'] = 'Donde mirar por actividades en un curso';
$string['tour_navigation_course_student_tour_name'] = 'Índice del curso';
$string['tour_navigation_course_teacher_tour_des'] = 'Modo de edición, arrastrar y soltar actividades y publicar anuncios en un curso';
$string['tour_navigation_course_teacher_tour_name'] = 'Edición del curso';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Este panel lateral puede contener más características.';
$string['tour_navigation_dashboard_title'] = 'Expandir para explorar';
$string['tour_navigation_dashboard_tour_des'] = 'En donde pueden encontrarse los bloques';
$string['tour_navigation_dashboard_tour_name'] = 'Cajón de bloques';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Añadir copia, eliminar y ocultar cursos desde este menú.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Yo comprendo';
$string['tour_navigation_mycourses_title'] = 'Cursos y categorías';
$string['tour_navigation_mycourses_tour_des'] = 'Opciones de gestión del curso en la página de Mis cursos';
$string['tour_navigation_mycourses_tour_name'] = 'Gestión del curso';
$string['tour_resetforall'] = 'El estado del tour ha sido reiniciado. Se mostrará nuevamente a todos los usuarios.';
$string['tourconfig'] = 'Archivo de configuración de tour a importar';
$string['tourisenabled'] = 'El Tour está habilitado';
$string['tourlist_explanation'] = 'Usted puede crear tantos tours como desee y habilitarlos para diferentes partes de Moodle. Solamente puede crearse un tour por página.';
$string['tours'] = 'Tours';
$string['usertours'] = 'Tours para usuario';
$string['usertours:managetours'] = 'Crear, editar, y eliminar tours para usuarios';
$string['viewtour_edit'] = 'Usted puede <a href="{$a->editlink}">editar los valores por defecto del tour</a> y <a href="{$a->resetlink}">forzar a que se muestre el tour</a> nuevamente a todos los usuarios.';
$string['viewtour_info'] = 'Este es el tour \'{$a->tourname}\'. Aplica a la ruta \'{$a->path}\'.';
