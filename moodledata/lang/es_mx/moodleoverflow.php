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
 * Strings for component 'moodleoverflow', language 'es_mx', version '4.2'.
 *
 * @package     moodleoverflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_downvote'] = 'Clic para voto negativo';
$string['action_remove_downvote'] = 'Clic para quitar voto negativo';
$string['action_remove_upvote'] = 'Clic para quitar voto positivo';
$string['action_upvote'] = 'Clic para voto positivo';
$string['addanewdiscussion'] = 'Añadir un nuevo tema de discusión';
$string['addanewreply'] = 'Añadir una nueva respuesta';
$string['allowanonymous'] = 'Permitir anónimo';
$string['allowcoursereputation'] = 'Sumar reputación dentro de un curso';
$string['allowdisablerating'] = 'Permitir a profesores deshabilitar valoración y reputación';
$string['allowmultiplemarks'] = '¿Calificaciones múltiples?';
$string['allownegativereputation'] = '¿Permitir reputación negativa?';
$string['allownegativereputation_help'] = 'Si se configura a \'Si\', la reputación de los usuarios dentro de un curso o dentro de un módulo puede ser negativa. Si se configura a \'No\', la reputación dejará de disminuir en cero..';
$string['allowrating'] = '¿Permitir valoraciones de publicación?';
$string['allowratingchange'] = 'Permitir cambios en valoración';
$string['allowreputation'] = '¿Permitir reputación  del usuario?';
$string['allowreview'] = 'Permitir foros moderados';
$string['allsubscribe'] = 'Sucribirse a todos los foros';
$string['allunsubscribe'] = 'Des-sucribirse de todos los foros';
$string['alsomarkhelpful'] = 'También marcar como útil';
$string['alsomarksolved'] = 'También marcar como solución';
$string['amount_unread_posts_in_discussion'] = 'Hay {$a} publicaciones no leídas en esta discusión.';
$string['amount_waiting_for_review'] = '¡{$a} publicación(es) necesita(n) ser  revisada(s)!';
$string['anonym_you'] = 'Anónimo (Usted)';
$string['anonymous'] = 'Anónimo';
$string['anonymous:everything'] = 'Preguntadores y contestadores (¡Irreversible!)';
$string['anonymous:only_questions'] = 'Solamente preguntadores (¡Irreversible!)';
$string['answer'] = '{$a} Respuesta';
$string['answerer'] = 'Respondedor #{$a}';
$string['answers'] = '{$a} Respuestas';
$string['approve'] = 'Aprobar';
$string['areaattachment'] = 'Anexos';
$string['areapost'] = 'Mensajes';
$string['attachment'] = 'Anexo';
$string['attachment_help'] = 'Usted puede opcionalmente anexar uno o más archivos a una publicación en foro. Si Usted añade una imagen, será mostrada después del mensaje.';
$string['attachments'] = 'Anexos';
$string['bynameondate'] = 'por {$a->name} ({$a->rating}) - {$a->date}';
$string['bynameondatenorating'] = 'por {$a->name} - {$a->date}';
$string['cannotcreatediscussion'] = 'No pudo crearse nueva discusión';
$string['cannotdeletepost'] = '¡Usted no puede eliminar esta publicación!';
$string['cannotfindparentpost'] = 'Nio pudo encontrarse el superior paterno de publicación {$a}';
$string['cannotreply'] = 'Usted no puede contestarle a esta publicación';
$string['cannottrack'] = 'No pudo detener monitoreo de ese foro';
$string['cannotunsubscribe'] = 'No se pudo des-suscribir a Usted  de ese foro';
$string['cannotupdatepost'] = 'Usted no puede actualizar esta publicación';
$string['cleanreadtime'] = 'Marcar publicaciones antiguas como hora de lectura';
$string['clicktosubscribe'] = 'Usted no está suscrito a esta discusión. Haga clic para suscribirse.';
$string['clicktounsubscribe'] = 'Usted está suscrito a esta discusión. Haga clic para des-suscribirse.';
$string['configallowcoursereputation'] = '¿Permitir sumar la reputación de todas las instancias del curso actual?';
$string['configallowdisablerating'] = 'Configurar a \'si\' si usted quiere darle a profesores la habilidad para deshabilitar valoración y reputación.';
$string['configallowratingchange'] = '¿Puede un usuario cambiar sus valoraciones?';
$string['configcleanreadtime'] = 'La hora del día para limpiar las publicaciones antiguas de la tabla \'read\'';
$string['configforcedreadtracking'] = 'Permite que Moodleoverflows sean configurados a monitoreo forzado de lectura. Resultará en disminución del desempeño para algunos usuarios, particularmente en cursos con muchos moodleoverflows y publicaciones. Cuando está desactivado, cualquier moodleoverflow configurado a Forzado será tratado como opcional.';
$string['configmanydiscussions'] = 'Número máximo de discusiones mostradas en una instancia Moodleoverflow por página';
$string['configmaxattachments'] = 'Número máximo por defecto de anexos permitidos por publicación.';
$string['configmaxbytes'] = 'Tamaño máximo por defecto para todos los anexos del foro en el sitio (sujeto a los límites del curso y otras configuracioones locales)';
$string['configmaxeditingtime'] = 'Segundos máximos por defecto son 3600 (= una hora)';
$string['configmaxmailingtime'] = 'Las publicaciones más antiguas que este número de horas no serán enviadas a los usuarios. Esto ayudará a evitar problemas en donde el cron no ha estado corriendo por un largo tiempo.';
$string['configoldpostdays'] = 'Número de días de antiguedad para considerar a cualquier publicación como leída.';
$string['configpreferteachersmark'] = 'La respuesta marcada como resuelta por un propietario del curso es priorizadas por sobre la respuesta marcadas como útil por el iniciador de la discusión.';
$string['configreputationnotnegative'] = 'Prohibir que la reputación del usuario se vuelva negativa.';
$string['configshowuserstats'] = 'Permitirle a profesores  en cursos ver estadísticas resumiendo la actividad de usuarios en Moodleoverflows.';
$string['configtrackingtype'] = 'Configuraciones por defecto para monitoreo de lectura.';
$string['configtrackmoodleoverflow'] = 'Configurar a \'Si\' si Usted desea monitorear leído/no
_leído para cada usuario.';
$string['configvotescaledownvote'] = 'La cantidad de reputación que da una votación_para_abajo para su publicación.';
$string['configvotescalehelpful'] = 'La cantidad de reputación que da una votación útil para su publicación.';
$string['configvotescalesolved'] = 'La cantidad de reputación que da un marcado como resuelto en su publicación.';
$string['configvotescaleupvote'] = 'La cantidad de reputación que da una votación_para_arriba para su publicación.';
$string['configvotescalevote'] = 'La cantidad de reputaión que da votar.';
$string['confirmsubscribe'] = '¿Realmente desea suscribirse al foro \'{$a}\'?';
$string['confirmsubscribediscussion'] = '¿Realmente desea des-sucribirse de la discusión \'{$a->discussion}\'en el foro \'{$a->moodleoverflow}\'?';
$string['confirmunsubscribe'] = '¿Realmente desea des-suscribirse de  moodleoverflow \'{$a}\'?';
$string['confirmunsubscribediscussion'] = '¿realmente desea des-suscribirse de la discusión \'{$a->discussion}\' en moodleoverflow \'{$a->moodleoverflow}\'?';
$string['containsstarterrating'] = 'Contiene una publicación marcada como la más útil por el preguntador';
$string['containsteacherrating'] = 'Contiene una publicación marcada como la solución por un profesor';
$string['couldnotadd'] = 'No pudo añadirse su publicación a causa de un error desconocido';
$string['couldnotdeletereplies'] = 'Lo sentimos, esto no puede eliminarse porque algunas personas ya han respondido al respecto.';
$string['couldnotupdate'] = 'No pudo actualizarse su publicación a causa de un error desconocido';
$string['coursewidereputation'] = '¿Reputación cruzada del módulo?';
$string['coursewidereputation_help'] = 'Si se configuraa \'Si\', las reputaciones de los usuarios de todos los módulos moodleoverflow en este curso serán sumadas.';
$string['crontask'] = 'Trabajos de mantenimiento de moodleoverflow';
$string['delete'] = 'Eliminar';
$string['deletesure'] = '¿Está seguro de querer eliminar esta publicación?';
$string['deletesureplural'] = '¿Está seguro de querer eliminar esta publicación y todas sus respuestas? ({$a} publicaciones)';
$string['desc:anonymous'] = 'Ningún nombre será mostrado.';
$string['desc:only_questions'] = 'El nombre de los preguntadores no será mostrado en su pregunta y comentarios.';
$string['desc:review_everything'] = 'Todas las preguntas y respuestas van a ser revisadas por un   profesor antes de ser publicadas.';
$string['desc:review_questions'] = 'Todas las preguntas van a ser revisadas por un   profesor antes de ser publicadas.';
$string['digestunreadpost'] = 'Curso: {$a->linktocourse} -> {$a->linktoforum}, Tópico: {$a->linktodiscussion} tiene {$a->unreadposts} publicaciones no  leídas.';
$string['disallowsubscribe'] = 'Suscripciones no permitidas';
$string['discussionlocked'] = 'Esta discusión ha sido bloqueada, por lo que Usted ya no puede contestarla.';
$string['discussionname'] = 'Nombre de la discusión';
$string['discussionnownotsubscribed'] = '{$a->name} NO será notificado sobre nuevas publicaciones en \'{$a->discussion}\' de \'{$a->moodleoverflow}\'';
$string['discussionnowsubscribed'] = '{$a->name} será notificado sobre nuevas publicaciones en \'{$a->discussion}\' de \'{$a->moodleoverflow}\'';
$string['discussions'] = 'SDiscusiones';
$string['discussionsubscription'] = 'Suscripción a discusión';
$string['discussionsubscription_help'] = 'Suscribirse a una discusión significa que Usted recibirá notificaciones acerca de nuevas publicaciones a esa discusión.';
$string['downvotenotchangeable'] = 'No se puede dar voto negativo';
$string['edit'] = 'Editar';
$string['editedby'] = 'Editado por {$a->name} - envío originaln {$a->date}';
$string['editedpostupdated'] = 'la publicacón de {$a} fue actualizada';
$string['email_rejected_subject'] = '{$a->coursename}: Una de sus publicaciones ha sido rechazada.';
$string['email_review_needed_subject'] = 'Revisión necesaria en {$a->coursename}: {$a->subject}';
$string['erroremptymessage'] = 'El mensaje a publicar no puede estar vacío';
$string['erroremptysubject'] = 'El asunto de la publicación no puede estar vacío';
$string['errorwhiledelete'] = 'Ocurrió un error al eliminar el registro.';
$string['eventdiscussioncreated'] = 'Discusión creada';
$string['eventdiscussiondeleted'] = 'Discusión eliminada';
$string['eventdiscussionsubscriptioncreated'] = 'Suscripción a discusión creada';
$string['eventdiscussionsubscriptiondeleted'] = 'Suscripción a discusión eliminada';
$string['eventdiscussionviewed'] = 'SDiscusión vista';
$string['eventpostcreated'] = 'Publicación creada';
$string['eventpostdeleted'] = 'Publicación elimiada';
$string['eventpostupdated'] = 'Publicación actualizada';
$string['eventratingcreated'] = 'Valoración creada';
$string['eventratingdeleted'] = 'Valoración eliminada';
$string['eventratingupdated'] = 'Valoración actualizada';
$string['eventreadtrackingdisabled'] = 'Monitoreo de lectura deshabiltado';
$string['eventreadtrackingenabled'] = 'Monitoreo de lectura habiltado';
$string['eventsubscriptioncreated'] = 'Suscripción creada';
$string['eventsubscriptiondeleted'] = 'Suscripción eliminada';
$string['everyonecannowchoose'] = 'Todos pueden elegir si se suscriben';
$string['everyoneisnowsubscribed'] = 'Ahora todos están suscritos a este foro';
$string['everyoneissubscribed'] = 'Todos están suscritos a este foro';
$string['forcedreadtracking'] = 'Permitir monitoreo de lectura forzado';
$string['generalmoodleoverflows'] = 'Foros en este curso';
$string['give_a_reason'] = 'Dar una razón (opcional)';
$string['gotoindex'] = 'Gestionar preferencias';
$string['grademaxgradeerror'] = 'La calificación máxima debe ser un número entero positivo deferente de 0';
$string['gradesreport'] = 'Reporte de calificaciones';
$string['gradesupdated'] = 'Calificaciones actualizadas';
$string['helpamountofactivity'] = 'Cada actividad,como escribir una publicación, iniciar una discusión o dar una valoración, otorga 1 punto.';
$string['hiddenmoodleoverflowpost'] = 'Publicación de foro oculta';
$string['invaliddiscussionid'] = 'ID de discusión incorrecto';
$string['invalidforcesubscribe'] = 'Modo de suscripción forzado inválido';
$string['invalidmoodleoverflowid'] = 'ID del foro era incorrecta';
$string['invalidparentpostid'] = 'ID de publicación paterna era incorrecto';
$string['invalidpostid'] = 'Publicación inválida ID - {$a}';
$string['invalidratingid'] = 'La valoración enviada no es ni voto_hacia_arriba ni voto_hacia_abajo.';
$string['jump_to_next_post_needing_review'] = 'Saltar a siguiente publicación  que necesita ser revisada.';
$string['lastpost'] = 'Última publicación';
$string['mailindexlink'] = 'Cambiar sus preferencias del foro: {$a}';
$string['manydiscussions'] = 'Discusiones por página';
$string['markallread'] = 'Marcar todas las publicaciones en esta discusión como leídas.';
$string['markallread_forum'] = 'Marcar todas las publicaciones como leídas';
$string['markdiscussionreadsuccessful'] = 'Esta discusión ha sido marcada com leída.';
$string['markhelpful'] = 'Marcar como Útil';
$string['markmoodleoverflowreadsuccessful'] = 'Todas las publicacione shan sido arcadas como leídas.';
$string['marknothelpful'] = 'No_Útil';
$string['marknotsolved'] = 'Quitar marca de solución';
$string['markread'] = 'Marcar como leída';
$string['markreadfailed'] = 'Una publicación de la discusión no pudo ser marcada como leída.';
$string['marksolved'] = 'Marcar como Solución';
$string['markunread'] = 'Marcar no_leída';
$string['maxattachments'] = 'Número máximo de anexos';
$string['maxattachments_help'] = 'Esta configuración define el número máximo de archivos que pueden ser anexados a una publicación en foro.';
$string['maxattachmentsize'] = 'Tamaño máximo de anexo';
$string['maxattachmentsize_help'] = 'Esta configuración especifica el tamaño máximo de archivo que puede ser anexado a una publicación del foro.';
$string['maxeditingtime'] = 'Máximo tiempo durante el cual una publicación puede ser editada por su propietario (segundos)';
$string['maxmailingtime'] = 'Tiempo de envío máximo';
$string['message'] = 'Mensaje';
$string['messageprovider:posts'] = 'Notificación de nuevas publicaciones';
$string['modulename'] = 'Moodleoverflow';
$string['modulename_help'] = 'El módulo Moodleoverflow les permite a los participantes usar una estructura de foro de pregunta-respuesta. La visualización del foro es no-cronológica, ya que el orden depende de votación colaborativa en lugar de en el tiempo.';
$string['modulenameplural'] = 'Moodleoverflows';
$string['moodleoverflow'] = 'Moodleoverflow';
$string['moodleoverflow:addinstance'] = 'Añadir una nueva instancia Moodleoverflow';
$string['moodleoverflow:allowforcesubscribe'] = 'Permitir suscripción forzada';
$string['moodleoverflow:createattachment'] = 'Crear anexos';
$string['moodleoverflow:deleteanypost'] = 'Eliminar publicaciones';
$string['moodleoverflow:deleteownpost'] = 'Eliminar publicaciones propias';
$string['moodleoverflow:editanypost'] = 'Editar publicaciones';
$string['moodleoverflow:managesubscriptions'] = 'Gestionar suscripciones';
$string['moodleoverflow:marksolved'] = 'Marcar una publicación como solución';
$string['moodleoverflow:movetopic'] = 'Mover tópico  a otro Foro Moodleoverflow';
$string['moodleoverflow:ratehelpful'] = 'Contestar en discusiónMarcar una publicación como útil';
$string['moodleoverflow:ratepost'] = 'Valorar una publicación';
$string['moodleoverflow:replypost'] = 'Contestar en discusión';
$string['moodleoverflow:reviewpost'] = 'Revisar (aprobar o rechazar) publicaciones';
$string['moodleoverflow:startdiscussion'] = 'Iniciar una discusión';
$string['moodleoverflow:viewdiscussion'] = 'Ver discusión';
$string['moodleoverflowauthorhidden'] = 'Autor (oculto)';
$string['moodleoverflowbodyhidden'] = 'Esta publicación no puede ser vista por Usted, probablemente porque Usted no ha publicado en la discusión, o no ha pasado el tiempo máximo de edición, o la discusión no ha comenzado, o la discusión ha caducado.';
$string['moodleoverflowfieldset'] = 'Conjunto_de_campo de ejemplo personalizado';
$string['moodleoverflowname'] = 'Nombre de Moodleoverflow';
$string['moodleoverflows'] = 'Moodleoverflows';
$string['moodleoverflowsubjecthidden'] = 'Asunto (oculto)';
$string['movetopicicon'] = 'El ícono para mover un tópico';
$string['movetopictoforum'] = 'El ícono para mover un tópico seleccionado a otro foro';
$string['nodiscussions'] = 'Aun no hay tópicos de discusión en este foro';
$string['noguestpost'] = 'Lo sentimos, los invitados no tienen permitido publicar.';
$string['noguesttracking'] = 'Lo sentimos, los invitados no tienen permitido configurar opciones de monitoreo.';
$string['noonecansubscribenow'] = 'Ahora las discusiones están prohibidas';
$string['nopermissiontosubscribe'] = 'Usted no tiene permiso para ver suscriptores';
$string['nopostmoodleoverflow'] = 'Lo sentimos, Usted no tiene permitido publicar a este foro.';
$string['noratemoodleoverflow'] = 'Lo sentimos, Usted no tiene permitido votar en este foro.';
$string['noratingchangeallowed'] = 'Usted no tiene permitido cambiar sus valoraciones.';
$string['notexists'] = 'LA discusión ya no existe';
$string['nothing'] = 'Nada';
$string['notpartofdiscussion'] = '¡Esta publicación no es parte de una discusión!';
$string['notrackmoodleoverflow'] = 'No monitorear publicaciones no_leídas';
$string['notstartuser'] = 'Solamente el usuario que inició la discusión puede marcar una respuesta como útil.';
$string['notteacher'] = 'Solamente los propietarios del curso pueden hacer esto.';
$string['noviewdiscussionspermission'] = 'Usted no tiene el permiso para ver discusiones en este foro';
$string['nowallsubscribed'] = 'Todos los  foros en {$a} están suscritos.';
$string['nowallunsubscribed'] = 'Todos los  foros en {$a} NO están suscritos.';
$string['nownotsubscribed'] = '{$a->name} NO será notificado acerca de nuevas publicaciones en \'{$a->moodleoverflow}\'';
$string['nownottracking'] = '{$a->name}ya no está monitoreando \'{$a->moodleoverflow}\'.';
$string['nowsubscribed'] = '{$a->name} será notificado acerca de nuevas publicaciones en \'{$a->moodleoverflow}\'';
$string['nowtracking'] = '{$a->name} ahora está monitoreando \'{$a->moodleoverflow}\'.';
$string['oldpostdays'] = 'Lías para leer después de';
$string['original_post'] = 'Publicación original';
$string['parent'] = 'Mostrar paterno';
$string['pending_review'] = 'Revisión pendiente';
$string['pending_review_but_cannot_now'] = 'Pendiente de revisión,  pero  no puede ser aprobada hasta {$a} después de la creación de esta publicación para permitirle al autor un  poco de tiempo para editarla.';
$string['permalink'] = 'Permaenlace';
$string['pluginadministration'] = 'Administración de Moodleoverflow';
$string['pluginname'] = 'Moodleoverflow';
$string['post_was_approved'] = 'La publicación fue aprobada';
$string['post_was_rejected'] = 'La publicación fue rechazada';
$string['postaddedsuccess'] = 'Su publicación fue añadida exitosamente.';
$string['postaddedtimeleft'] = 'Usted tiene {$a} para editarlo si quisiera hacerle algun cambio.';
$string['postbyuser'] = '{$a->post} por {$a->user}';
$string['postincontext'] = 'Ver esta publicación en contexto';
$string['postmailinfolink'] = 'Esta es una copia de un mensaje publicado en {$a->coursename}.

Para responder, haga clic en: {$a->replylink}';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postnotexist'] = 'La publicación solicitadad no existe';
$string['posts'] = 'Publicaciones';
$string['posttomoodleoverflow'] = 'Publicar al foro';
$string['postupdated'] = 'Su publicación fue actualizada';
$string['preferteachersmark'] = '¿Preferir marcado por propietario del curso?';
$string['privacy:anonym_discussion_name'] = 'Nombre de discusión anonimizado';
$string['privacy:anonym_post_message'] = 'Este contenido ha sido eliminado.';
$string['privacy:anonym_user_name'] = 'Anónimo';
$string['privacy:discussionsubscriptionpreference'] = 'Usted ha elegido la siguiente preferencia de suscripción a discusión para este foro: "{$a->preference}"';
$string['privacy:grade'] = 'Su calificación para este foro de Moodleoverflow';
$string['privacy:metadata:core_files'] = 'Moodleoverflow almacena archivos que han sido subidos por el usuario para formar parte de una publicación en un foro.';
$string['privacy:metadata:moodleoverflow_discuss_subs'] = 'Información acerca de las suscripciones a discusiones de foros individuales. Esto incluye cuando un usuario ha elegido suscribirse a una disusión, o des-suscribirse de una en donde de otro modo estaría suscrito.';
$string['privacy:metadata:moodleoverflow_discuss_subs:discussion'] = 'La ID de la discusión que fue suscrita / des-suscrita.';
$string['privacy:metadata:moodleoverflow_discuss_subs:preference'] = 'La hora de inicio de la suscripción.';
$string['privacy:metadata:moodleoverflow_discuss_subs:userid'] = 'La ID del usuario que cambió las configuraciones de la suscripción.';
$string['privacy:metadata:moodleoverflow_discussions'] = 'Información acerca de las discusiones del foro. Esto incluye cuales discusiones ha iniciado un usuario.';
$string['privacy:metadata:moodleoverflow_discussions:name'] = 'El nombre de la discusión.';
$string['privacy:metadata:moodleoverflow_discussions:timemodified'] = 'La hora cuando la discusión (por ejemplo, una publicación) fue modificada por última vez.';
$string['privacy:metadata:moodleoverflow_discussions:userid'] = 'La ID del usuario que inició la discusión.';
$string['privacy:metadata:moodleoverflow_discussions:usermodified'] = 'La ID del usuario que modificó la discusión.';
$string['privacy:metadata:moodleoverflow_grades'] = 'Información acerca de la calificación que un usuario  tuvo por su contribución en un foro.';
$string['privacy:metadata:moodleoverflow_grades:grade'] = 'La calificación que tuvo el usuario';
$string['privacy:metadata:moodleoverflow_grades:moodleoverflowid'] = 'La ID del foro Moodleoverflow en donde se obtuvo la calificación';
$string['privacy:metadata:moodleoverflow_grades:userid'] = 'La  ID del usuario que obtuvo la calificación.';
$string['privacy:metadata:moodleoverflow_posts'] = 'Información acerca de publicaciones en foro. Esto incluye datos de publicaciones que ha escrito un usuario.';
$string['privacy:metadata:moodleoverflow_posts:created'] = 'La fecha en la cual fue creada esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:discussion'] = 'La ID de la discusión a la cual contribuye esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:message'] = 'El texto de esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:modified'] = 'La última fecha de caundo fue modificada esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:parent'] = 'La ID de la publicación a la cual se refiere esta publicación.';
$string['privacy:metadata:moodleoverflow_posts:userid'] = 'La Id del usuario que envió esta publicación.';
$string['privacy:metadata:moodleoverflow_ratings'] = 'Información acerca de valoraciones de publicaciones. Esto incluye cuando un usuario ha valorado una publicación y su valoración específica.';
$string['privacy:metadata:moodleoverflow_ratings:discussionid'] = 'La ID de la discusión de la cual es parte la publicación valorada.';
$string['privacy:metadata:moodleoverflow_ratings:firstrated'] = 'La fecha de cuando fue enviada esta valoración.';
$string['privacy:metadata:moodleoverflow_ratings:lastchanged'] = 'La fecha de cuando fue cambiada por última vez la valoración.';
$string['privacy:metadata:moodleoverflow_ratings:moodleoverflowid'] = 'La ID del foro Moodleoverflow que contiene la publicación valorada.';
$string['privacy:metadata:moodleoverflow_ratings:postid'] = 'La ID de la publicación que fue valorada.';
$string['privacy:metadata:moodleoverflow_ratings:rating'] = 'La valoración enviada. 0 = neutral, 1 = negativa, 2 = positiva, 3 = útil, 4 = resuelta';
$string['privacy:metadata:moodleoverflow_ratings:userid'] = 'La ID del usuario que envió la valoración.';
$string['privacy:metadata:moodleoverflow_read'] = 'Información acerca del monitoreo de lectura de publicaciones. Esto incluye cuando las publicaciones fueron leidas por un usuario.';
$string['privacy:metadata:moodleoverflow_read:discussionid'] = 'La ID de la discusión a la que pertenece esta publicación.';
$string['privacy:metadata:moodleoverflow_read:firstread'] = 'La fecha de cuando fue leida por primera vez la publicación.';
$string['privacy:metadata:moodleoverflow_read:lastread'] = 'La fecha de cuando fue leida por última vez la publicación por el usuario.';
$string['privacy:metadata:moodleoverflow_read:postid'] = 'La ID de la publicación que ha sido leida.';
$string['privacy:metadata:moodleoverflow_read:userid'] = 'La ID del usuario que leyó la publicación.';
$string['privacy:metadata:moodleoverflow_subscriptions'] = 'Información acerca de suscripciones a foros. Esto incluye  a cuales foros un usuario se ha des-sucrito.';
$string['privacy:metadata:moodleoverflow_subscriptions:moodleoverflow'] = 'La Id del foro moodleoverflow al que se ha suscrito el usuario.';
$string['privacy:metadata:moodleoverflow_subscriptions:userid'] = 'La ID del usuario que se ha suscrito al foro.';
$string['privacy:metadata:moodleoverflow_tracking'] = 'Información acerca del monitoreo de foros. Esto incluye cuales foros no monitorea un usuario.';
$string['privacy:metadata:moodleoverflow_tracking:moodleoverflowid'] = 'La Id del foro moodleoverflow que no es monitoreado por el usuario.';
$string['privacy:metadata:moodleoverflow_tracking:userid'] = 'La ID del usuario que no da seguimiento al foro.';
$string['privacy:postwasread'] = 'Esta publicación fue leida por primera vez en {$a->firstread} y leida más recientemente en {$a->lastread}';
$string['privacy:readtrackingdisabled'] = 'Usted ha elegido no monitorear cuales publicaciones ha leido dentro de este foro.';
$string['privacy:subscribedtoforum'] = 'Usted esta suscrito a este foro.';
$string['questioner'] = 'Preguntador';
$string['questions'] = 'Preguntas';
$string['questions_and_posts'] = 'Preguntas y respuestas';
$string['ratedbystarter'] = 'Esta publicación fue marcada como la más útil por el preguntador';
$string['ratedbyteacher'] = 'Esta publicación fue marcada como la solución por un profesor';
$string['rateownpost'] = 'Usted no puede valorar su propia publicación.';
$string['ratingfailed'] = 'Falló la valoración. Inténtelo nuevamente.';
$string['ratingheading'] = 'Valoración y reputación';
$string['ratingpreference'] = 'Msotrar primero';
$string['ratingpreference_help'] = 'Las respuestas pueden ser marcadas como solución y útil. Esta opción decide cuales de estas serán puestas como la primera respuesta de la discusión. Hay 2 opciones:

* Útil - Un marcado como útil por quien empezó el tópico será puesto en la parte superior de la discusión.
* Resuelta - Un marcado como resuelta por un profesor será puesto en la parte superior de la discusión.';
$string['ratingtoold'] = 'Las valoraciones solamente pueden ser cambiadas dentro de los 30 minutos después del primer voto.';
$string['re'] = 'Re:';
$string['reject'] = 'Rechazar';
$string['reply'] = 'Comentario';
$string['replyfirst'] = 'Respuesta';
$string['reputation'] = 'Reputación';
$string['reputationnotnegative'] = '¿Reputación solamente positiva?';
$string['review'] = 'Revisar';
$string['review_help'] = 'Seleccionar lo que tiene que ser aprobado por un  profesor antes de ser mostrado a los estudiantes.';
$string['review_needed'] = '¡Revisión necesaria!';
$string['reviewpossibleaftertime'] = 'Revisión posible después de (segundos)';
$string['reviewpost'] = 'Revisar una publicación';
$string['scalefactor'] = 'Factor de escala';
$string['scalefactor_help'] = 'El usuario es dividido entre el factor de escala para obtener la calificación de cada usuario. Si la calificación resultante fuera mayor que la calificación máxima, el valor será limitado a la calificación máxima especificada.';
$string['scalefactorerror'] = 'El factor de escala debe ser un número entero positivo diferente de 0';
$string['seeuserstats'] = 'Ver estadísticas del usuario';
$string['showuserstats'] = 'Mostrar estadísticas acumulativas del usuario';
$string['smallmessage'] = '{$a->user} publicó en {$a->moodleoverflowname}';
$string['starterrating'] = 'Útil';
$string['subject'] = 'Asunto';
$string['subscribe'] = 'Suscribirse a este foro';
$string['subscribed'] = 'Suscrito';
$string['subscribeenrolledonly'] = 'Lo sentimos, solamente los usuarios inscritos tiene permitido suscribirse a notificaciones de publicaciones.';
$string['subscribestart'] = 'Mandarme notificaciones de nuevas publicaciones en este foro';
$string['subscribestop'] = 'No quiero ser notificado acerca de nuevas publicaciones en este foro';
$string['subscriptionauto'] = 'Auto suscripción';
$string['subscriptiondisabled'] = 'Suscripción deshabilitada';
$string['subscriptionforced'] = 'Suscripción forzada';
$string['subscriptionmode'] = 'Modo de suscripción';
$string['subscriptionmode_help'] = 'Cuando un participante está suscrito a un foro significa que recibirá notificaciones de publicaciones en foro. Hay 4 opciones de modo de suscripción:

* Suscripción opcional - los participantes pueden elegir si se suscriben o no.
* Suscripción forzada - Todos están suscritos y no pueden des-suscribirse
* Auto suscripción - Todos están inicialmente suscritos, pero pueden elegir des-suscribirse en cualquier momento
* Suscripción deshabilitada - No están permitidas las suscripciones

Nota: Cualquier cambio del modo de suscripción  solamente afectará a usuarios que se inscriban en el curso en el futuro, y no afectará a los usuarios existentes.';
$string['subscriptionoptional'] = 'Suscripción opcional';
$string['subscriptiontrackingheader'] = 'Suscripción y monitoreo';
$string['switchtoauto'] = '¡Si usted cambia a la auto suscripción, todos los usuarios inscritos serán suscritos a este foro!';
$string['switchtooptional'] = '¡Si usted cambia a la suscripción opcional, todos los usuarios actualmente suscritos serán des-suscritos de este foro!';
$string['taskcleanreadrecords'] = 'Trabajo de mantenimiento de moodleoverflow para limpiar antiguos registros de lectura';
$string['tasksenddailymail'] = 'Trabajo Moodleoverflow para enviar un correo diario de publicaciones no  leídas.';
$string['tasksendmails'] = 'Trabajo de mantenimiento de moodleoverflow para enviar Emails';
$string['taskupdategrades'] = 'Trabajo e mantenimiento de Moodleoverflow para actulizar calificaciones';
$string['teacherrating'] = 'Solución';
$string['there_are_no_posts_needing_review'] = 'No hay más  publicaciones en este foro que necesiten ser revisadas.';
$string['tracking'] = 'Monitoreo';
$string['trackingoff'] = 'Desactivada';
$string['trackingon'] = 'Forzada';
$string['trackingoptional'] = 'Opcional';
$string['trackingtype'] = 'Monitoreo de lectura';
$string['trackingtype_help'] = 'El monitoreo de lectura le permite a los participantes revisar fácilmente cuales publicaciones no han visto al resaltar las nuevas publicaciones.

Si se configura a opcional, el monitoreo está activado por defecto ´pero los participantes lo pueden desactivar.

Si se habilita \' Permitir monitoreo de lectura forzado\' en la administración del sitio, entonces una opción siguiente está disponible - forzada. Esto significa que el monitoreo siempre estará activado.';
$string['trackmoodleoverflow'] = 'Monitorear publicaciones no_leídas';
$string['unknownerror'] = 'Esto no se esparaba que pasara.';
$string['unreadposts'] = 'Publicaciones no_leídas';
$string['unreadpostsnumber'] = '{$a} publicaciones no_leídas';
$string['unreadpostsone'] = '1 publicación no_leída';
$string['unsubscribe'] = 'Des-suscribirse de este foro';
$string['unsubscribediscussion'] = 'Des-suscribirse de esta discusión';
$string['unsubscribediscussionlink'] = 'Des-suscribirse de esta discusión: {$a}';
$string['unsubscribelink'] = 'Des-suscribirse de este foro: {$a}';
$string['updategrades'] = 'actualizar calificaciones';
$string['upvotenotchangeable'] = 'No se puede votar positivo';
$string['userstatscourseactivity'] = 'Actividad (todoelcurso)';
$string['userstatscoursereputation'] = 'Reputación (todoelcurso)';
$string['userstatsdownvotes'] = 'Votos negativos recibidos';
$string['userstatsforumactivity'] = 'Actividad (este foro)';
$string['userstatsforumreputation'] = 'Reputación (este foro)';
$string['userstatsupvotes'] = 'Votos positivos recibidos';
$string['votescaledownvote'] = 'Reputación: Voto_hacia_abajo';
$string['votescalehelpful'] = 'Reputación: Útil';
$string['votescalesolved'] = 'Reputación: Solución';
$string['votescaleupvote'] = 'Reputación: Voto_hacia_arriba';
$string['votescalevote'] = 'Reputación: Voto';
$string['your_post_was_rejected'] = 'Su publicación fue rechazada';
$string['your_post_was_rejected_with_reason'] = 'Su publicación fue rechazada con la razón siguiente:';
$string['yournewtopic'] = 'Su nuevo tópico de discusión';
$string['yourreply'] = 'Su respuestas';
