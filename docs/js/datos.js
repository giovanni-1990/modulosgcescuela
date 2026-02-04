const listaDocumentos = [
  {
    "codigo": "FO-EEJ-01",
    "nombre": "Boleta de detección de necesidades de capacitación Órganos Jurisdiccionales",
    "version": "6",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-01 Boleta DNC Órganos Jurisdiccionales (versión 6).doc"
  },
  {
    "codigo": "FO-EEJ-02",
    "nombre": "Boleta de detección de necesidades de capacitación Unidades Administrativas",
    "version": "6",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-02 Boleta DNC Unidades Administrativas v6.doc"
  },
  {
    "codigo": "FO-EEJ-03",
    "nombre": "Boleta de Detección de Nececidades de Capacitación Validación Entrevista",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-03 Boleta DNC Validación Entrevista v3.docx"
  },
  {
    "codigo": "FO-EEJ-04",
    "nombre": "Boleta de Detección de Necesidades de Capacitación Grupos Focales",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-04 Boleta DNC GRUPOS FOCALES v3.docx"
  },
  {
    "codigo": "FO-EEJ-05",
    "nombre": "Programa de Formación Judicial y Administrativo Auxiliares Judiciales",
    "version": "06",
    "fecha": "oct-25",
    "archivo": "FO-EEJ-05 PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO AUXILIARES JUDICIALES v5.docx"
  },
  {
    "codigo": "FO-EEJ-06",
    "nombre": "Programa de Formación Judicial y Administrativo Funcionarios y Funcionarias Judiciales",
    "version": "06",
    "fecha": "oct-25",
    "archivo": "FO-EEJ-06  PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO FUNCIONARIOS Y FUNCIONARIAS JUDICIALES v5.docx"
  },
  {
    "codigo": "FO-EEJ-07",
    "nombre": "Programa de Formación Judicial y Administrativo Personal Administrativo Técnico",
    "version": "06",
    "fecha": "oct-25",
    "archivo": "FO-EEJ-07 PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO PERSONAL ADMINISTRATIVO Y TÉCNICO v5.docx"
  },
  {
    "codigo": "FO-EEJ-08",
    "nombre": "Programa de Formación Judicial y Administrativo Área de Formación para todo el Personal del Organismo Judicial",
    "version": "06",
    "fecha": "oct-25",
    "archivo": "FO-EEJ-08  PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO TODO EL PERSONAL DEL ORGANISMO JUDICIAL v5.docx"
  },
  {
    "codigo": "FO-EEJ-09",
    "nombre": "Programa de Formación Judicial y Administrativo Área Género",
    "version": "06",
    "fecha": "oct-25",
    "archivo": "FO-EEJ-09  PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO GÉNERO v5.docx"
  },
  {
    "codigo": "FO-EEJ-10",
    "nombre": "Programa De Formación Judicial Y Administrativo Personal Administrativo de las Unidades del Sistema de Gestión de Calidad",
    "version": "06",
    "fecha": "oct-25",
    "archivo": "FO-EEJ-10 PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO PERSONAL ADMINISTRATIVO DEPENDENCIAS ISO v5.docx"
  },
  {
    "codigo": "FO-EEJ-11",
    "nombre": "Programa De Formación Judicial Y Administrativo Salas de la Corte de Apelaciones Certificadas Norma ISO",
    "version": "06",
    "fecha": "oct-25",
    "archivo": "FO-EEJ-11  PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO SALAS CERTIFICADAS ISO v5.docx"
  },
  {
    "codigo": "FO-EEJ-12",
    "nombre": "Consolidado de Requerimientos de Capacitación Unidades del Sistema de Gestión de Calidad del Organismo Judicial",
    "version": "05",
    "fecha": "oct-25",
    "archivo": "FO-EEJ-12 Consolidado de Requerimientos de Capacitación Unidades del SGC V.4.xlsx"
  },
  {
    "codigo": "FO-EEJ-13",
    "nombre": "Calendarización Ordinaria del Programa de Formación Judicial y Administrativo",
    "version": "8",
    "fecha": "may-24",
    "archivo": "FO-EEJ-13 CALENDARIZACIÓN ORDINARIA DEL PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO.doc"
  },
  {
    "codigo": "FO-EEJ-14",
    "nombre": "Diploma Aprobación (Digital)",
    "version": "5",
    "fecha": "feb-25",
    "archivo": "DIPLOMAS DE LA ESCUELA DE ESTUDIOS JUDICIALES/FO-EEJ-14 DIPLOMA POR APROBACIÓN/DIGITAL - FO-EEJ-14 DIPLOMA POR APROBACIÓN.doc"
  },
  {
    "codigo": "FO-EEJ-14",
    "nombre": "Diploma Aprobación (Impreso)",
    "version": "5",
    "fecha": "feb-25",
    "archivo": "DIPLOMAS DE LA ESCUELA DE ESTUDIOS JUDICIALES/FO-EEJ-14 DIPLOMA POR APROBACIÓN/IMPRESO - FO-EEJ-14 DIPLOMA POR APROBACIÓN.doc"
  },
  {
    "codigo": "FO-EEJ-15",
    "nombre": "Diploma Participación (Impreso)",
    "version": "5",
    "fecha": "feb-25",
    "archivo": "DIPLOMAS DE LA ESCUELA DE ESTUDIOS JUDICIALES/FO-EEJ-15 DIPLOMA POR PARTICIPACIÓN/IMPRESO- FO-EEJ-15 DIPLOMA POR PARTICIPACIÓN.doc"
  },
  {
    "codigo": "FO-EEJ-15",
    "nombre": "Diploma Participación (Virtual)",
    "version": "5",
    "fecha": "feb-25",
    "archivo": "DIPLOMAS DE LA ESCUELA DE ESTUDIOS JUDICIALES/FO-EEJ-15 DIPLOMA POR PARTICIPACIÓN/VIRTUAL - FO-EEJ-15 DIPLOMA POR PARTICIPACIÓN.doc"
  },
  {
    "codigo": "FO-EEJ-16",
    "nombre": "Informe de Ejecucion del Programa de Formación Judicial y Administrativo",
    "version": "4",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-16 INFORME DE EJECUCION DEL PROGRAMA DE FORMACION JUDICIAL Y ADMINISTRATIVO-V4.doc"
  },
  {
    "codigo": "FO-EEJ-17",
    "nombre": "Informe de Ejecucion del Programa de Formación Judicial y Administrativo de Personal de las Unidades del Sistema de Gestión de Calidad...",
    "version": "4",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-17 INFORME DE EJECUCION DE ACTIVIDADES ACADEMICAS OFERTA DEP SGC-VERSION 4.doc"
  },
  {
    "codigo": "FO-EEJ-18",
    "nombre": "Calendarización Extraordinaria del Programa de Formación Judicial y Administrativo",
    "version": "7",
    "fecha": "may-24",
    "archivo": "FO-EEJ-18 CALENDARIZACIÓN EXTRAORDINARIA DEL PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO.doc"
  },
  {
    "codigo": "FO-EEJ-19",
    "nombre": "Informe Final de Actividad Académica",
    "version": "4",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-19 INFORME FINAL DE ACTIVIDAD ACADÉMICA (modelo).PDF"
  },
  {
    "codigo": "FO-EEJ-20",
    "nombre": "Programación Preliminar Anual del Programa de Formación Judicial y Administrativo...",
    "version": "4",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-20 PROGRAMACIÓN PRELIMINAR ANUAL DEL PROGRAMA DE FORMACIÓN JUDICIAL Y ADMINISTRATIVO-VERSION 4.xlsx"
  },
  {
    "codigo": "FO-EEJ-21",
    "nombre": "Servicio No Conforme",
    "version": "5",
    "fecha": "N/A",
    "archivo": "FO-EEJ-21 SERVICIO NO CONFORME versión 5.docx"
  },
  {
    "codigo": "FO-EEJ-22",
    "nombre": "Lista de Verificación de Documentación que Conforma el Expediente de Actividades Académicas",
    "version": "4",
    "fecha": "mar-25",
    "archivo": "FO-EEJ-22 INTEGRACIÓN DE EXPEDIENTE ACADÉMICO Y NORMATIVA v4.pdf"
  },
  {
    "codigo": "FO-EEJ-23",
    "nombre": "Encuesta de Actividad Académica e-learning Plataforma Moodle",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-23 Encuesta e-learning MOODLE.doc"
  },
  {
    "codigo": "FO-EEJ-24",
    "nombre": "Encuesta Actividad Académica e-learning Plataforma Zoom y Moodle",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-24 ENCUESTA  e-learning PLATAFORMA ZOOM Y MOODLE.doc"
  },
  {
    "codigo": "FO-EEJ-25",
    "nombre": "Diseño Curricular",
    "version": "4",
    "fecha": "feb-25",
    "archivo": "FO-EEJ-25  DISEÑO CURRICULAR V.4.docx"
  },
  {
    "codigo": "FO-EEJ-26",
    "nombre": "Informe de Monitoreo Pedagógico Modalidad Virtual Actividades ISO Mediante Plataforma Moodle y Zoom",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-26 Monitoreo pedagógico virtual Act ISO Plataforma y Zoom.docx"
  },
  {
    "codigo": "FO-EEJ-27",
    "nombre": "Informe de Monitoreo Pedagógico Modalidad Virtual Actividades ISO Mediante Plataforma Zoom",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-27 monitoreo pedagógico virtual Act ISO Zoom.docx"
  },
  {
    "codigo": "FO-EEJ-28",
    "nombre": "Instrumento para evaluar la eficacia de la capacitación",
    "version": "4",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-28_INSTRUMENTO PARA EVALUAR LA EFICACIA DE LA CAPACITACIÓN_GC_FAB.docx"
  },
  {
    "codigo": "FO-EEJ-29",
    "nombre": "Informe de Encuesta de Actividad Académica en Plataforma Zoom y Moodle",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-29  Informe de encuesta de actividad académica plataforma Zoom y Moodle.xlsx"
  },
  {
    "codigo": "FO-EEJ-30",
    "nombre": "Informe de Encuesta de Actividad Académica en Plataforma Moodle",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-30 INFORME DE ENCUESTA DE ACTIVIDAD ACADEMICA EN PLATAFORMA MOODLE.xlsx"
  },
  {
    "codigo": "FO-EEJ-31",
    "nombre": "Informe para Evaluar la Eficacia de la Capacitación",
    "version": "4",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-31 INFORME PARA EVALUAR LA EFICACIA DE LA CAPACITACIÓN VERSIÓN 4.doc"
  },
  {
    "codigo": "FO-EEJ-32",
    "nombre": "Contenido Programático para Actividad Académica Ordinaria o Extraordinaria",
    "version": "5",
    "fecha": "feb-25",
    "archivo": "FO-EEJ-32 CONTENIDO PROGRAMÁTICO V.5.docx"
  },
  {
    "codigo": "FO-EEJ-33",
    "nombre": "Plantilla Convocatoria Consejo de la Carrera Judicial",
    "version": "4",
    "fecha": "abr-25",
    "archivo": "PLANTILLAS DE CONVOCATORIAS/FO-EEJ-33 Plantilla Convocatoria sin Inscripción de Discente v.4.docx"
  },
  {
    "codigo": "FO-EEJ-34",
    "nombre": "Cronograma de Mantenimiento Preventivo de Equipo Crítico",
    "version": "5",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-34 CRONOGRAMA DE MANTENIMIENTO PREVENTIVO DE EQUIPO CRÍTICO.xlsx"
  },
  {
    "codigo": "FO-EEJ-35",
    "nombre": "Plantilla de Convocatoria con Inscripción de Discente",
    "version": "1",
    "fecha": "abr-25",
    "archivo": "PLANTILLAS DE CONVOCATORIAS/FO-EEJ-35 Plantilla de Convocatoria con previa Inscripción de discente ....docx"
  },
  {
    "codigo": "FO-EEJ-36",
    "nombre": "Plantilla de convocatoria RIAEJ",
    "version": "1",
    "fecha": "abr-25",
    "archivo": "PLANTILLAS DE CONVOCATORIAS/FO-EEJ-36 PLANTILLA DE CONVOCATORIA RIAEJ.docx"
  },
  {
    "codigo": "FO-EEJ-38",
    "nombre": "Convocatoria Externa para Integrar Red Docente",
    "version": "6",
    "fecha": "abr-25",
    "archivo": "PLANTILLAS DE CONVOCATORIAS/FO-EEJ-38 CONVOCATORIA PARA INTEGRAR RED DOCENTE EXTERNA V6.docx"
  },
  {
    "codigo": "FO-EEJ-39",
    "nombre": "Convocatoria Interna para Integrar Red Docente",
    "version": "6",
    "fecha": "abr-25",
    "archivo": "PLANTILLAS DE CONVOCATORIAS/FO-EEJ-39 CONVOCATORIA PARA INTEGRAR RED DOCENTE INTERNA V6.docx"
  },
  {
    "codigo": "FO-EEJ-40",
    "nombre": "Cronograma de Actividades de Mantenimiento y Reparación de Vehículos",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-40 Cronograma de Actividades de Mantenimiento y Reparación de Vehículos.xlsx"
  },
  {
    "codigo": "FO-EEJ-41",
    "nombre": "Cronograma de Actividades de Mantenimiento y Reparación de Infraestructura",
    "version": "5",
    "fecha": "ene-25",
    "archivo": "FO-EEJ-41 CRONOGRAMA DE ACTIVIDADES DE MANTENIMIENTO Y REPARACIÓN DE INFRAESTRUCTURA.xls"
  },
  {
    "codigo": "FO-EEJ-42",
    "nombre": "Programa del Curso Virtual",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-42 PROGRAMA DEL CURSO VIRTUAL.doc"
  },
  {
    "codigo": "FO-EEJ-43",
    "nombre": "Cronograma de Actividades - Modalidad Virtual",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-43 CRONOGRAMA DE ACTIVIDADES MODALIDAD VIRTUAL.docx"
  },
  {
    "codigo": "FO-EEJ-44",
    "nombre": "Nómina de Discentes y Docentes para Matricular en Cursos en Plataforma Educativa",
    "version": "4",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-44 NÓMINA DE DISCENTES Y DOCENTES PARA MATRICULAR EN CURSOS EN PLATAFORMA EDUCATIVA V4.xls"
  },
  {
    "codigo": "FO-EEJ-45",
    "nombre": "Programación Mensual de Cursos en Plataforma Educativa",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-45 PROGRAMACIÓN MENSUAL DE CURSOS EN PLATAFORMA EDUCATIVA.xlsx"
  },
  {
    "codigo": "FO-EEJ-46",
    "nombre": "Diploma Participación con Cooperante",
    "version": "3",
    "fecha": "feb-25",
    "archivo": "DIPLOMAS DE LA ESCUELA DE ESTUDIOS JUDICIALES/FO-EEJ-46 DIPLOMA PARTICIPACIÓN CON COOPERANTE/FO-EEJ-46 DIPLOMA PARTICIPACIÓN CON COOPERANTE.DOC"
  },
  {
    "codigo": "FO-EEJ-47",
    "nombre": "Plan de Trabajo Área de Detección de Necesidades de Capacitación",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-47 Plan de Trabajo Área de Detección de Necesidades de Capacitación.docx"
  },
  {
    "codigo": "FO-EEJ-48",
    "nombre": "Lista de Chequeo para Vehículo de la Escuela de Estudios Judiciales",
    "version": "4",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-48 Lista de Chequeo para Vehiculo de la Escuela de Estudios Judiciales.pdf"
  },
  {
    "codigo": "FO-EEJ-49",
    "nombre": "Resumen de Inventario Equipo Crítico de la Escuela de Estudios Judiciales",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-49 RESUMEN DE INVENTARIO EQUIPO CRÍTICO DE LA ESCUELA DE ESTUDIOS JUDICIALES.xlsx"
  },
  {
    "codigo": "FO-EEJ-50",
    "nombre": "Listado de Vehiculos Asociados",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-50 LISTADO DE VEHÍCULOS ASOCIADOS.doc"
  },
  {
    "codigo": "FO-EEJ-51",
    "nombre": "Plan de Trabajo Area Academico- Investigativa y Evaluación de la Eficacia de la Capacitación",
    "version": "2",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-51 Plan de trabajo para realizar evaluación de la eficiacia.doc"
  },
  {
    "codigo": "FO-EEJ-52",
    "nombre": "Check List de Papelería de Mantenimiento de Vehículos",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-52 Check List de Papelería de Mantenimiento de Vehículos.pdf"
  },
  {
    "codigo": "FO-EEJ-54",
    "nombre": "Informe de Monitoreo Pedagógico Modalidad Presencial",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-54 Informe de Monitoreo Pedagógico Modalidad Presencial.docx"
  },
  {
    "codigo": "FO-EEJ-55",
    "nombre": "Informe de Monitoreo Pedagógico Modalidad Semipresencial",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-55 Informe de Monitoreo Pedagógico Modalidad Semipresencial.docx"
  },
  {
    "codigo": "FO-EEJ-56",
    "nombre": "Formulario de Cancelación y/o Reprogramación de Actividad Académica",
    "version": "4",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-56 FORMULARIO DE CANCELACIÓN Y-O REPROGRAMACIÓN DE ACTIVIDADES ACADÉMICAS.pdf"
  },
  {
    "codigo": "FO-EEJ-57",
    "nombre": "Encuesta de Actividad Académica e-learning Plataforma Moodle / Formación Inicial",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-57 Encuesta de Actividad Académica e-learning Plataforma Moodle  Formación Inicial.doc"
  },
  {
    "codigo": "FO-EEJ-58",
    "nombre": "Informe de Encuesta de Actividad Académica en Plataforma Moodle / Formación Inicial",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-58 Informe de Encuesta de Actividad Académica en Plataforma Moodle  Formación Inicial .xlsx"
  },
  {
    "codigo": "FO-EEJ-59",
    "nombre": "Estadística de Servicio No Conforme de la Escuela de Estudios Judiciales",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-59 Estadística de Servicio No Conforme de la Escuela de Estudios Judiciales.xlsx"
  },
  {
    "codigo": "FO-EEJ-60",
    "nombre": "Ficha de Indicadores de Proceso",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-60 Ficha de Indicadores EEJ - Año 2024.xlsx"
  },
  {
    "codigo": "FO-EEJ-61",
    "nombre": "Listado de Control de Documentación de Pilotos",
    "version": "2",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-61 LISTADO DE CONTROL DE DOCUMENTACIÓN DE PILOTOS.xls"
  },
  {
    "codigo": "FO-EEJ-62",
    "nombre": "Listado de Asistencia para actividades presenciales",
    "version": "2",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-62 LISTADO DE ASISTENCIA PARA ACTIVIDADES PRESENCIALES.pdf"
  },
  {
    "codigo": "FO-EEJ-63",
    "nombre": "Requerimiento de Insumos para Capacitación",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-63 REQUERIMIENTO DE INSUMOS PARA CAPACITACIÓN.doc"
  },
  {
    "codigo": "FO-EEJ-64",
    "nombre": "Requerimiento de Docente Externo",
    "version": "3",
    "fecha": "may-24",
    "archivo": "FO-EEJ-64 REQUERIMIENTO DE DOCENTE EXTERNO.doc"
  },
  {
    "codigo": "FO-EEJ-65",
    "nombre": "Nómina de Participantes",
    "version": "3",
    "fecha": "mar-24",
    "archivo": "FO-EEJ-65 NÓMINA DE PARTICIPANTES.doc"
  },
  {
    "codigo": "FO-EEJ-66",
    "nombre": "Listado de Asistencia para Actividades Virtuales",
    "version": "3",
    "fecha": "feb-25",
    "archivo": "FO-EEJ-66 LISTADO DE ASISTENCIA PARA ACTIVIDADES VIRTUALES v.3.xlsx"
  },
  {
    "codigo": "FO-EEJ-67",
    "nombre": "Matriz de comunicación de la Escuela de Estudios Judiciales",
    "version": "2",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-67 MATRIZ DE COMUNICACIÓN DE LA ESCUELA DE ESTUDIOS JUDICIALES.xlsx"
  },
  {
    "codigo": "FO-EEJ-68",
    "nombre": "Cronograma Modalidad Presencial",
    "version": "2",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-68 CRONOGRAMA DE ACTIVIDADES MODALIDAD PRESENCIAL.doc"
  },
  {
    "codigo": "FO-EEJ-69",
    "nombre": "Oficio interno/externo",
    "version": "2",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-69 OFICIO.docx"
  },
  {
    "codigo": "FO-EEJ-70",
    "nombre": "Jueces y Magistrados Docentes",
    "version": "3",
    "fecha": "may-24",
    "archivo": "FO-EEJ-70- JUECES Y MAGISTRADOS DOCENTES.xlsx"
  },
  {
    "codigo": "FO-EEJ-71",
    "nombre": "Docentes Externos",
    "version": "2",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-71 DOCENTES EXTERNOS .xlsx"
  },
  {
    "codigo": "FO-EEJ-72",
    "nombre": "Control de Conocimientos Organizacionales",
    "version": "1",
    "fecha": "feb-24",
    "archivo": "FO-EEJ-72 Control de Conocimientos Organizacionales.pdf"
  },
  {
    "codigo": "FO-EEJ-73",
    "nombre": "Recolección de Insumos para Diseño Curricular o Contenido Programático",
    "version": "2",
    "fecha": "feb-25",
    "archivo": "FO-EEJ-73 RECOLECCIÓN DE INSUMOS PARA DISEÑO CURRICULAR V2.docx"
  },
  {
    "codigo": "FO-EEJ-74",
    "nombre": "Listado de Asistencia Actividades Presenciales",
    "version": "1",
    "fecha": "may-24",
    "archivo": "FO-EEJ-74 LISTADO DE ASISTENCIA ACTIVIDADES PRESENCIALES.doc"
  },
  {
    "codigo": "FO-EEJ-75",
    "nombre": "Diploma de participación de Cámaras del Organismo Judicial",
    "version": "1",
    "fecha": "jul-24",
    "archivo": "DIPLOMAS DE LA ESCUELA DE ESTUDIOS JUDICIALES/FO-EEJ-75 DIPLOMA DE CAMARA/FO-EEJ-75 DIPLOMA DE PARTICIPACIÓN EMITIDO POR LAS CAMARAS DEL ORGANISMO JUDICIAL.DOC"
  },
  {
    "codigo": "FO-EEJ-76",
    "nombre": "Reporte de Servicio no conforme - Rechazo de Convocatoria para Participar en Actividades Académicas",
    "version": "1",
    "fecha": "ago-24",
    "archivo": "FO-EEJ-76 Servicio no conforme - RECHAZO DE CONVOCATORIA PARA ACTIVIDADES.pdf"
  },
  {
    "codigo": "FO-EEJ-77",
    "nombre": "Programa de Formación Judicial y Administrativo Programas de Especialización",
    "version": "02",
    "fecha": "oct-25",
    "archivo": "FO-EEJ-77 PROGRAMA DE FORMACIÓN JUDICIAL Y ADMIN DE ESPECIALIZACIONES.docx"
  },
  {
    "codigo": "FO-EEJ-79",
    "nombre": "Evaluación de la Actividad Académica por el Discente",
    "version": "4",
    "fecha": "may-24",
    "archivo": "FO-EEJ-79 Evaluación de la actividad académica/FO-EEJ-79 EVALUACIÓN DE LA ACTIVIDAD ACADÉMICA-VERSION 4.docx"
  },
  {
    "codigo": "FO-EEJ-80",
    "nombre": "Registro de Docentes Invitados",
    "version": "2",
    "fecha": "ene-24",
    "archivo": "FO-EEJ-80 REGISTRO DOCENTES INVITADOS.xlsx"
  },
  {
    "codigo": "IT-EEJ-01",
    "nombre": "Instructivo de Mantenimiento Preventivo de Vehiculos de la Escuela de Estudios Judiciales",
    "version": "3",
    "fecha": "ene-24",
    "archivo": "IT-EEJ-01 INSTRUCTIVO DE MANTENIMIENTO PREVENTIVO DE VEHICULOS.pdf"
  }
];
