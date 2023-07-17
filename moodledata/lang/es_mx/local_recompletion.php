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
 * Strings for component 'local_recompletion', language 'es_mx', version '4.2'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedrecompletiontitle'] = 'Avanzado';
$string['archive'] = 'Archivar intentos antiguos';
$string['archivechoice'] = 'Archivar intentos de elección antiguos';
$string['archivecompletiondata'] = 'Archivar datos de finalización';
$string['archivecompletiondata_help'] = 'Escribir datos de finalización del curso a las tablas local_recompletion_cc, local_recompletion_cc_cc y local_recompletion_cmc. Los datos de finalización serán eliminados permanentemente si esto no es seleccionado.';
$string['archivecustomcertcertificates'] = 'Archivar certificados emitidos';
$string['archivecustomcertcertificates_help'] = '¿Deberían de ser archivados los certificados personalizados emitidos?';
$string['archivequestionnaire'] = 'Archivar intentos antiguos de questionnaire';
$string['archivequiz'] = 'Archivar intentos antiguos de examen';
$string['archivescorm'] = 'Archivar intentos antiguos de SCORM';
$string['assignattempts'] = 'Asignar intentos';
$string['assignattempts_help'] = 'Como manejar intentos de tarea dentro del curso. Si se usa la configuración \'Actualizar al cambiar calificaciones\', cuando un profesor actualice la calificación dentro de una actividad de Tarea y el usuario ya haya completado el curso, su fecha de finalización del curso será actualizada para usar la fecha del cambio de la calificación de la tarea.';
$string['assignevent'] = 'Actualizar finalización del curso al cambiar calificación';
$string['bulkchangedate'] = 'Cambiar fecha de finalización para usuarios seleccionados';
$string['bulkresetallcompletion'] = 'Reiniciar toda la finalización para usuarios seleccionados';
$string['choiceattempts'] = 'Intentos de elección';
$string['choiceattempts_help'] = 'Si deberían de ser eliminados los Intentos de elección - si se elige archivar, los intentos antiguos de Elección serán archivados en la tabla local_recompletion_cha.';
$string['completionnotenabled'] = 'La finalización no está habilitada en este curso';
$string['completionreset'] = 'La finalización para los usuarios seleccionados en este curso ha sido reiniciada.';
$string['completionresetuser'] = 'Finalización para {$a} en este curso ha sido reiniciada.';
$string['completionupdated'] = 'Las fechas de finalización del curso han sido actualizadas';
$string['coursecompletiondate'] = 'Nueva fecha de finalización del curso';
$string['customcertcertificates'] = 'Certificados personalizados';
$string['customcertcertificates_help'] = '¿Deberían ser eliminados los certificados personalizados emitidos?';
$string['customcertresetcertificates'] = 'Eliminar certificados emitidos';
$string['customcertresetcertificatesverifywarn'] = 'Atención: Al eliminar los certificados emitidos, aunque los archive antes d ela eliminación, resultará en el hecho de que los certificados emitidos ya no pueden ser verificados más en Moodle. Por favor, solamente elimine los certificados si esto es aceptable para usted.';
$string['defaultsettings'] = 'Configuraciones predeterminadas de refinalización';
$string['delete'] = 'Eliminar intentos existentes';
$string['deletegradedata'] = 'Eliminar todas las calificaciones para el usuario';
$string['deletegradedata_help'] = 'Eliminar datos de finalización de calificación actual de la tabla grade_grades. Los datos de re-finalización son eliminados permanentemente pero los datos son retenidos en la tabla de datos de Historia de la calificación.';
$string['donothing'] = 'No hacer nada';
$string['editcompletion'] = 'Editar fecha de finalización del curso';
$string['editcompletion_desc'] = 'Modificar la fecha de finalización del curso para los siguientes usuarios:';
$string['editrecompletion'] = 'Editar configuraciones de re-finalización del curso';
$string['emailrecompletiontitle'] = 'Ajustes de mensaje de re-finalización personalizado';
$string['enablerecompletion'] = 'Habilitar re-finalización';
$string['enablerecompletion_help'] = 'El plugin de re-finalización permite que los detalles de finalización de un curso sean reiniciados después de un período definido.';
$string['eventrecompletion'] = 'Re-finalización del curso';
$string['extraattempt'] = 'Darles intento(s) extra a estudiantes';
$string['forcearchivecompletiondata'] = 'Forzar archivar datos de finalización';
$string['forcearchivecompletiondata_help'] = 'Si se habilita, los datos de finalización serán forzados sobre todas las refinalizaciones del curso. Esto puede evitar la pérdida accidental de datos.';
$string['modifycompletiondates'] = 'Modificar fechas de finalización del curso';
$string['noassigngradepermission'] = 'Su finalización fue reiniciada, pero este curso contien una tarea que no pudo ser reiniciada; por favor, pídale a su profesor que lo haga por Usted si fuera necesario.';
$string['nousersselected'] = 'No se seleccionaron usuarios';
$string['pluginname'] = 'Re-finalización del curso';
$string['privacy:metadata:attempt'] = 'El intento número';
$string['privacy:metadata:completionstate'] = 'Si la actividad ha sido completada';
$string['privacy:metadata:course'] = 'La ID del curso enlazado a esta tabla.';
$string['privacy:metadata:coursemoduleid'] = 'La ID de la actividad';
$string['privacy:metadata:coursesummary'] = 'Almacena los datos de finalización de curso para un usuario.';
$string['privacy:metadata:gradefinal'] = 'Calificación final recibida por finalización del curso';
$string['privacy:metadata:local_recompletion_cc'] = 'Archivo de antiguas finalizaciones de curso.';
$string['privacy:metadata:local_recompletion_cc_cc'] = 'Archivo de los anteriores course_completion_crit_compl';
$string['privacy:metadata:local_recompletion_cha'] = 'Archivo de respuestas de elección';
$string['privacy:metadata:local_recompletion_cha:choiceid'] = 'LA ID de Opción del Archivo de respuestas de elección';
$string['privacy:metadata:local_recompletion_cha:optionid'] = 'La ID de Opción del Archivo de respuestas de elección';
$string['privacy:metadata:local_recompletion_cmc'] = 'Archivo de antiguas finalizaciones de módulo de curso.';
$string['privacy:metadata:local_recompletion_ltia'] = 'Datos de bitácoras de acceso y gradeback';
$string['privacy:metadata:local_recompletion_ltia:lastaccess'] = 'La hora de cuando el usuario accedió por última vez al curso.';
$string['privacy:metadata:local_recompletion_ltia:lastgrade'] = 'La última calificación que al usuario le fue grabado que tenía';
$string['privacy:metadata:local_recompletion_ltia:timecreated'] = 'La hora de cuando el usuario se inscribió';
$string['privacy:metadata:local_recompletion_ltia:toolid'] = 'La ID de la herramienta del método de inscripción LTI.';
$string['privacy:metadata:local_recompletion_ltia:userid'] = 'La ID del usuario';
$string['privacy:metadata:local_recompletion_qr'] = 'Tabla de respuesta de Refinalización de Questionnaire';
$string['privacy:metadata:local_recompletion_qr:complete'] = 'completo';
$string['privacy:metadata:local_recompletion_qr:grade'] = 'Calificación';
$string['privacy:metadata:local_recompletion_qr:questionnaireid'] = 'ID del questionnario';
$string['privacy:metadata:local_recompletion_qr:submitted'] = 'Enviado';
$string['privacy:metadata:overrideby'] = 'La ID del usuario de la persona que anuló la finalización de actividad';
$string['privacy:metadata:quiz_attempts'] = 'Detalles archivados acerca de cada intento en un examen.';
$string['privacy:metadata:quiz_attempts:attempt'] = 'El número del intento.';
$string['privacy:metadata:quiz_attempts:currentpage'] = 'La página actual en donde está el usuario.';
$string['privacy:metadata:quiz_attempts:preview'] = 'Si es que esta es o no una previsualización de un examen.';
$string['privacy:metadata:quiz_attempts:state'] = 'El estado actual del intento.';
$string['privacy:metadata:quiz_attempts:sumgrades'] = 'La suma de calificaciones en el intento.';
$string['privacy:metadata:quiz_attempts:timecheckstate'] = 'La hora de cuando fue revisado el intento.';
$string['privacy:metadata:quiz_attempts:timefinish'] = 'La hora de cuando fue completado el intento.';
$string['privacy:metadata:quiz_attempts:timemodified'] = 'La hora de cuando se actualizó el intento.';
$string['privacy:metadata:quiz_attempts:timemodifiedoffline'] = 'La hora de cuando se actualizó el intento mediante una actualización fuera-de-línea.';
$string['privacy:metadata:quiz_attempts:timestart'] = 'La hora de cuando se inició el intento.';
$string['privacy:metadata:quiz_grades'] = 'Detalles archivados acerca de la calificación global para los intentos anteriores de examen.';
$string['privacy:metadata:quiz_grades:grade'] = 'La calificación general para este examen.';
$string['privacy:metadata:quiz_grades:quiz'] = 'El examen que fue calificado.';
$string['privacy:metadata:quiz_grades:timemodified'] = 'La hora de cuando fue modificada la calificación.';
$string['privacy:metadata:quiz_grades:userid'] = 'El usuario que fue calificado.';
$string['privacy:metadata:reaggregate'] = 'Si es que la finalización del curso fue reagregada o no.';
$string['privacy:metadata:scoes_track:element'] = 'El nombre del elemento a ser monitoreado';
$string['privacy:metadata:scoes_track:value'] = 'El valor del elemento dado';
$string['privacy:metadata:scorm_scoes_track'] = 'Archivo de los datos monitoreados de los SCOes que pertenecen a la actividad';
$string['privacy:metadata:timecompleted'] = 'La hora cuando el curso fue completado.';
$string['privacy:metadata:timeenrolled'] = 'La hora de cuando el usuario fue inscrito en el curso';
$string['privacy:metadata:timemodified'] = 'La hora cuando el registro fue modificado';
$string['privacy:metadata:timestarted'] = 'La hora cuando el curso fue iniciado.';
$string['privacy:metadata:unenroled'] = 'Si es que el usuario fue o no des-inscrito (dado de baja) del curso';
$string['privacy:metadata:userid'] = 'La ID del usuario enlazado a esta tabla.';
$string['privacy:metadata:viewed'] = 'Si es que la actividad fue vista';
$string['pulsenotifications'] = 'Notificaciones de pulso';
$string['pulsenotifications_help'] = '¿Deberían de ser reiniciadas las Notificaciones de pulso que ya han sido enviadas?';
$string['pulseresetnotifications'] = 'Reiniciar notificaciones';
$string['questionnaireattempts'] = 'Intentos de questionnaire';
$string['questionnaireattempts_help'] = 'Qué hacer con los intentos de Questionnaire existentes. Si se selecciona eliminar y archivar, los intentos antiguos de Questionnaire serán archivados en las tablas de local_recompletion.';
$string['quizattempts'] = 'Intentos de examen';
$string['quizattempts_help'] = 'Que hacer con los intentos de Examen existentes. Si se selecciona eliminar y archivar, los intentos antiguos de examen serán archivados en las tablas local_recompletion.
Si se configura para dar intentos extra, esto añadirá una anulación de examen para permitir que el usuario tenga el número máximo configurado de intentos permitidos .';
$string['recompletion'] = 'refinalización';
$string['recompletion:manage'] = 'Permitir que se cambien las configuraciones de re-finalización del curso';
$string['recompletion:resetmycompletion'] = 'Reiniciar mi propia finalización';
$string['recompletionemailbody'] = 'Cuerpo del mensaje de re-finalización';
$string['recompletionemailbody_help'] = 'Puede añadirse un asunto personalizado  en el Email de re-finalización como texto simple o como auto-formato Moodle, incluyendo marcas HTML y multi.-idioma

Pueden incluirse los siguientes remplazables en el mensaje:

* Nombre del curso {$a->coursename}
* Enlace al curso {$a->link}
* Enlace a la página del perfil del usuario {$a->profileurl}
* Email del usuario {$a->email}
* Nombre completo del usuario {$a->fullname}';
$string['recompletionemaildefaultbody'] = 'Hola; por favor re-finalice el curso {$a->coursename} {$a->link}';
$string['recompletionemaildefaultsubject'] = 'Curso {$a->coursename} re-finalización requerida';
$string['recompletionemailenable'] = 'Enviar mensaje de re-finalización';
$string['recompletionemailenable_help'] = 'Habilitar mensajería Email para notificarle a los usuarios que la re-finalización es requerida';
$string['recompletionemailsubject'] = 'Asunto del mensaje de re-finalización';
$string['recompletionemailsubject_help'] = 'Puede añadirse un asunto personalizado  en el Email de re-finalización como texto simple

Pueden incluirse los siguientes remplazables en el mensaje:

* Nombre del curso {$a->coursename}
* Nombre completo del usuario {$a->fullname}';
$string['recompletionnotenabled'] = 'Re-finalización no está habilitada en este curso.';
$string['recompletionrange'] = 'Período de re-finalización';
$string['recompletionrange_help'] = 'Configurar el período de tiempo antes de que sean reiniciados los resultados de re-finalización de un usuario.';
$string['recompletionsettingssaved'] = 'Configuraciones de re-finalización guardadas';
$string['recompletiontask'] = 'Revisar si hay usuarios que necesiten re-completar';
$string['resetallcompletion'] = 'Reiniciar toda la finalización';
$string['resetcompletionconfirm'] = '¿Está seguro de querer reiniciar todos los datos de finalización en este curso para {$a}?  Advertencia - esto podría eliminar permanentemente algunos contenidos enviados.';
$string['resetcompletionfor'] = 'Reiniciar la finalización para {$a}';
$string['resetlti'] = 'Reiniciar calificaciones LTI';
$string['resetltis'] = 'Calificaciones LTI';
$string['resetltis_help'] = 'Como manejar calificaciones LTI dentro del curso.
Si es usada la configuración de \'Reiniciar calificaciones LTI\', todas las calificaciones LTI serán reiniciadas a 0.
Cuando el usuario archivó nueva finalización en el curso, la calificación actualizada del curso será re-enviada al proveedor LTI.';
$string['resetmycompletion'] = 'Reiniciar mi finalización de actividad';
$string['scormattempts'] = 'Intentos SCORM';
$string['scormattempts_help'] = 'Si deberían de ser eliminados los intentos SCORM existentes - si se selecciona archivar los intentos SCORM antiguos serán archivados en la tabla local_recompletion_sst.';
