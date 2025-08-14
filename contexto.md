# **Documentación de Proyecto: Plataforma E-Learning para Escuela de Barman**

## **La Academia de Bar Digital: Una Visión para la Formación en Mixología Moderna**

Esta sección inicial establece la identidad estratégica del proyecto, fusionando el ethos de una escuela de coctelería de alto rendimiento con los principios de un e-learning moderno y eficaz. El objetivo es definir un norte claro que guíe todas las decisiones de diseño y desarrollo posteriores.

### **Introducción: Honrando el Pasado, Abrazando el Futuro**

El propósito de esta plataforma no es reemplazar la invaluable formación práctica, sino actuar como un complemento potente y escalable. Inspirada en la filosofía de instituciones como Bar Academy, que "honra el pasado y abraza el futuro" <sup>1</sup>, la plataforma busca democratizar el acceso a una formación de élite. La visión es consolidar un espacio digital para crear "Bartenders de Alto Rendimiento" <sup>1</sup>, utilizando la tecnología para ampliar el alcance y la profundidad del aprendizaje.

El proyecto aspira a convertirse en un "proveedor de clase mundial de soluciones de aprendizaje digital" <sup>3</sup> especializado en el arte de la mixología. El objetivo final es establecer un "estándar global en el aprendizaje online, mixto y digital" <sup>4</sup> para este campo vocacional, demostrando cómo la tecnología puede potenciar una artesanía tradicional.

### **Misión y Valores Fundamentales**

Para guiar el desarrollo, se establece una misión formal y un conjunto de valores que reflejan un compromiso con la calidad y la integridad profesional.

Declaración de la Misión:

"Proveer a bartenders aspirantes y profesionales un entorno de aprendizaje digital flexible, atractivo y completo que cultive la maestría de las técnicas clásicas, fomente la innovación creativa e inculque los principios del servicio de alto rendimiento".

Esta misión se fundamenta en la necesidad de que todo proyecto de e-learning tenga objetivos claros <sup>5</sup> y sea capaz de soportar tanto rutas de aprendizaje integrales (cursos) como la adquisición de habilidades específicas (módulos de contenido).<sup>6</sup>

Valores Fundamentales:

Los siguientes valores, inspirados en academias online ejemplares 3, formarán la base cultural de la plataforma:

- **Excelencia en el Oficio:** Un compromiso inquebrantable con la calidad educativa, asegurando que los estudiantes estén "adecuadamente preparados para enfrentar su próximo paso en la vida, ya sea la universidad o la carrera".<sup>7</sup>
- **Innovación Pedagógica:** Aprovechar la tecnología no como un fin en sí mismo, sino para "avanzar en la integración de prácticas de enseñanza y aprendizaje innovadoras y basadas en la evidencia".<sup>8</sup>
- **Diseño Centrado en el Alumno:** Reconocer que los participantes aportan una amplia gama de experiencias e intereses, y diseñar una plataforma que sea "acogedora, de apoyo y fácilmente accesible para todos".<sup>8</sup>
- **Integridad Profesional:** Fomentar una cultura de honestidad, dedicación y respeto por el oficio, reflejando los más altos estándares de la industria de la coctelería.

### **Objetivos Estratégicos (Metas SMART)**

Aplicando el marco SMART (Específico, Medible, Alcanzable, Relevante, Delimitado en el Tiempo) <sup>5</sup>, se definen los siguientes objetivos para guiar el desarrollo y medir el éxito del proyecto:

- **Compromiso del Alumno (Engagement):** Lograr una tasa de finalización de cursos del 80% para todos los estudiantes inscritos, mediante la implementación de gamificación y contenido interactivo.
- **Dominio de Habilidades (Mastery):** Asegurar que el 90% de los estudiantes que completen el curso "Bartender Profesional" puedan aprobar un examen final simulado con una puntuación igual o superior al 85%.
- **Adopción de la Plataforma (Adoption):** Incorporar con éxito una primera cohorte de 50 estudiantes durante el primer trimestre posterior al lanzamiento.
- **Valor de Negocio (Business Value):** Diseñar la plataforma como un producto comercialmente viable, con un conjunto de características lo suficientemente robusto como para ser presentado a la escuela Bar Academy. El sistema podría reducir significativamente su carga administrativa en el seguimiento y la evaluación de los estudiantes, conectando así un proyecto académico con un caso de negocio del mundo real.<sup>5</sup>

Una consideración fundamental para una plataforma dedicada a un oficio como la coctelería es que debe trascender la simple transferencia de conocimientos. A diferencia de las materias puramente académicas, la formación profesional implica inculcar una ética profesional, un estándar de calidad y un respeto por la artesanía.<sup>9</sup> Este proyecto no es para un LMS genérico; es para una escuela específica, Bar Academy <sup>1</sup>, que posee una fuerte identidad de marca centrada en el "alto rendimiento". Por lo tanto, el diseño de la plataforma, desde su interfaz de usuario hasta sus mecanismos de retroalimentación, debe potenciar el rol del instructor como un mentor y maestro del oficio, no simplemente como un gestor de contenidos. La plataforma debe sentirse menos como una escuela y más como la extensión digital de un gremio profesional exclusivo.

## **El Ecosistema de Usuarios: Roles, Permisos y Recorridos**

Esta sección define la arquitectura de usuarios del sistema, detallando quién puede hacer qué y mapeando sus interacciones típicas con la plataforma. Esto se basa en los principios de Control de Acceso Basado en Roles (RBAC) para garantizar la seguridad y la funcionalidad adecuada para cada tipo de usuario.<sup>10</sup>

### **Definición de Roles de Usuario**

Basándose en los roles estándar de los sistemas de gestión de aprendizaje (LMS) <sup>11</sup> y las necesidades específicas de este proyecto, se establecen los siguientes perfiles:

- **Administrador (Superadmin):** Posee control total sobre la plataforma. Gestiona la configuración del sistema, las cuentas de todos los usuarios, las categorías de cursos, las analíticas globales y la información de facturación. Este rol está destinado al propietario de la plataforma o a la alta dirección de la escuela.<sup>11</sup>
- **Instructor (Profesor/Formador):** Crea y gestiona sus propios cursos, módulos y lecciones. Es responsable de subir contenido, crear cuestionarios y proyectos, calificar las entregas de sus alumnos y visualizar los informes de progreso de sus cursos. No puede gestionar a otros instructores ni la configuración global del sistema.<sup>12</sup>
- **Estudiante (Alumno):** Es el usuario principal de la plataforma. Se inscribe en los cursos, consume el contenido, participa en cuestionarios, entrega proyectos, sigue su propio progreso y participa en los foros de la comunidad. Este es el rol más restringido, centrado exclusivamente en su viaje de aprendizaje.<sup>11</sup>
- **Evaluador (Rol Opcional/Avanzado):** Un rol especializado con permisos limitados. Este usuario puede ser asignado para calificar entregas específicas de alto valor, como el proyecto "Cóctel de Autor", sin tener los privilegios completos de un instructor sobre todo el curso. Esto permite que expertos invitados o bartenders senior participen en las evaluaciones sin comprometer la estructura del curso. Es un rol personalizado inspirado en la necesidad de permisos flexibles.<sup>14</sup>

### **Matriz de Roles y Permisos de Usuario**

Para proporcionar una referencia clara e inequívoca al equipo de desarrollo, la siguiente tabla detalla las capacidades de cada rol. Esta matriz es una práctica estándar de la industria para especificar el modelo RBAC, eliminando ambigüedades y previniendo fallos de seguridad o acceso incorrecto a las funcionalidades.<sup>10</sup> Traduce directamente las reglas de negocio ("un instructor solo puede gestionar sus propios cursos") en una especificación técnica que puede ser implementada.

| Característica / Acción | Administrador | Instructor | Estudiante | Evaluador |
| --- | --- | --- | --- | --- |
| **Gestión de Usuarios (CRUD)** | ✔   | ✖   | ✖   | ✖   |
| --- | --- | --- | --- | --- |
| **Gestionar Configuración del Sistema** | ✔   | ✖   | ✖   | ✖   |
| --- | --- | --- | --- | --- |
| **Crear/Editar/Eliminar Cualquier Curso** | ✔   | ✖   | ✖   | ✖   |
| --- | --- | --- | --- | --- |
| **Crear/Editar Curso Propio** | ✔   | ✔   | ✖   | ✖   |
| --- | --- | --- | --- | --- |
| **Inscribirse en un Curso** | ✔   | ✔   | ✔   | ✖   |
| --- | --- | --- | --- | --- |
| **Ver Contenido del Curso** | ✔   | ✔   | ✔   | ✔   |
| --- | --- | --- | --- | --- |
| **Entregar Tarea/Proyecto** | ✖   | ✖   | ✔   | ✖   |
| --- | --- | --- | --- | --- |
| **Calificar Cualquier Tarea** | ✔   | ✖   | ✖   | ✖   |
| --- | --- | --- | --- | --- |
| **Calificar Tarea Asignada** | ✔   | ✔   | ✖   | ✔   |
| --- | --- | --- | --- | --- |
| **Ver Todos los Informes** | ✔   | ✖   | ✖   | ✖   |
| --- | --- | --- | --- | --- |
| **Ver Informes de Cursos Propios** | ✔   | ✔   | ✖   | ✖   |
| --- | --- | --- | --- | --- |
| **Ver Progreso Propio** | N/A | N/A | ✔   | N/A |
| --- | --- | --- | --- | --- |
| **Gestionar Contenido de la Comunidad** | ✔   | ✔   | ✔   | ✖   |
| --- | --- | --- | --- | --- |

### **Recorridos del Usuario (Escenarios Narrativos)**

Para dar un contexto que va más allá de la matriz, esta sección narra un viaje típico para los roles principales, ilustrando cómo interactuarán con el sistema en la práctica.

- **Recorrido del Instructor:** El viaje comienza cuando el instructor inicia sesión. Procede a crear la estructura de un nuevo curso, como "Bartender Profesional". Dentro de este, añade módulos temáticos basados en el plan de estudios, como "Ron / Pisco / Whisky".<sup>15</sup> Para cada módulo, crea lecciones, como subir un video demostrativo sobre "Técnicas de batido" <sup>2</sup> o redactar un texto sobre la historia de la coctelería. A continuación, diseña un cuestionario de opción múltiple para evaluar el conocimiento sobre cócteles clásicos. Finalmente, accede a la sección de entregas para revisar y calificar el video de un estudiante sobre su "Cóctel de Autor", utilizando una rúbrica predefinida para ofrecer una retroalimentación detallada y estructurada.
- **Recorrido del Estudiante:** El estudiante se registra en la plataforma y explora el catálogo de cursos.<sup>1</sup> Se inscribe en el curso "Bartender Profesional". Accede a su panel personal, donde ve su progreso. Avanza a través de las lecciones de forma secuencial, viendo videos y leyendo textos. Para poner a prueba su memoria, realiza un cuestionario interactivo sobre recetas de cócteles y recibe una calificación instantánea. Al final del curso, aborda el proyecto final: diseña su propio "Cóctel de Autor", documenta el proceso en un formulario estructurado, sube un video y una foto, y lo envía para su evaluación. Una vez aprobado, recibe una notificación y puede descargar su certificado digital.

El rol de "Instructor" en un contexto vocacional es fundamentalmente diferente al de un entorno académico. No son solo conferenciantes; son mentores y maestros de un oficio. Las plataformas LMS estándar a menudo tratan a los instructores como meros gestores de contenido y calificadores.<sup>11</sup> Sin embargo, la formación en Bar Academy es eminentemente práctica y basada en habilidades.<sup>2</sup> Por lo tanto, el rol de "Instructor" en esta plataforma necesita herramientas que potencien la mentoría. Para el proyecto "Cóctel de Autor", esto se traduce en la capacidad de proporcionar comentarios con marca de tiempo en el video de un estudiante o utilizar una rúbrica de evaluación detallada y reutilizable.<sup>6</sup> Esto eleva al "Instructor" de un simple gestor a un verdadero mentor digital.

## **Planos de la Plataforma: Características Principales y Requisitos Funcionales**

Esta sección constituye la especificación funcional del proyecto, detallando el "qué" de la plataforma. Desglosa el sistema en módulos lógicos que los estudiantes deberán construir.

### **Módulo de Gestión de Cursos y Contenido**

Este módulo es el núcleo del sistema, donde los instructores crean y organizan la experiencia de aprendizaje.

- **Estructura Jerárquica:** La organización del contenido seguirá una jerarquía clara para facilitar la navegación y el aprendizaje estructurado. Los **Cursos** son los contenedores de nivel superior (ej. "Bartender Profesional"). Cada curso se compone de **Módulos** temáticos (ej. "Licores dulces", "Cafetería" <sup>15</sup>), que a su vez contienen las  
    **Lecciones** individuales.<sup>16</sup>
- **Tipos de Contenido:** Para atender a diversos estilos de aprendizaje <sup>5</sup>, las lecciones deben soportar múltiples formatos de contenido:
  - **Videos embebidos:** Para demostraciones de técnicas, preparación de cócteles y clases teóricas.
  - **Texto enriquecido con imágenes:** Ideal para lecciones sobre historia, teoría de destilados y descripciones de productos.
  - **Descargas de PDF:** Para recetarios, guías de estudio y material de referencia.
  - **Enlaces a recursos externos:** Para complementar el aprendizaje con artículos, videos o sitios web de interés.
- **Herramienta de Autoría de Contenido:** Los instructores dispondrán de una herramienta de autoría integrada e intuitiva.<sup>17</sup> Esto les permitirá crear, editar y organizar lecciones directamente en la plataforma, sin necesidad de software externo, agilizando el proceso de gestión de contenidos.

### **Módulo de Inscripción y Progreso del Estudiante**

Este módulo gestiona el ciclo de vida del estudiante dentro de la plataforma, desde el descubrimiento hasta la finalización del curso.

- **Catálogo de Cursos:** Una página de acceso público que mostrará todos los cursos disponibles, similar a la oferta de Bar Academy.<sup>1</sup> Cada entrada incluirá detalles como el título, descripción, plan de estudios, duración, precio e instructor.
- **Inscripción y Pago:** Un flujo de trabajo sencillo para que los estudiantes se inscriban en un curso. Este proceso debe incluir la opción de integrarse con una pasarela de pago para gestionar las transacciones de forma segura.
- **Panel del Estudiante (Dashboard):** Será la página de inicio personalizada para cada estudiante. Es un elemento clave para la motivación y el compromiso del usuario <sup>19</sup> y mostrará:
  - Los cursos en los que está inscrito.
  - Una barra de progreso visual y clara para cada curso (ej. "75% completado").
  - Próximas fechas de entrega de tareas y proyectos.
  - Los últimos anuncios de sus instructores.
  - Insignias y puntos obtenidos a través de la gamificación.

### **Motor de Evaluación y Certificación**

Este es el módulo más crítico y diferenciador, diseñado para cumplir con los requisitos de evaluación específicos del proyecto. Se divide en dos sub-módulos distintos para abordar los dos tipos de evaluación solicitados.

#### **El Módulo de Verificación de Conocimientos Interactivos**

- **Funcionalidad:** Evaluar la memorización de los 31 cócteles clásicos.
- **Características:**
  - **Banco de Preguntas Extenso:** Los instructores podrán crear y gestionar un gran banco de preguntas sobre recetas de cócteles, ingredientes, cristalería e historia.
  - **Generación Dinámica de Cuestionarios:** El examen final será una prueba cronometrada que seleccionará aleatoriamente 31 preguntas del banco, garantizando que cada intento sea único y desafiante.<sup>20</sup>
  - **Tipos de Preguntas Interactivas:** Para ir más allá de la opción múltiple, se incluirán formatos interactivos como: arrastrar y soltar ("Arrastra los ingredientes correctos a la coctelera para hacer un Margarita"), rellenar los espacios en blanco y preguntas de punto caliente ("Haz clic en la cristalería correcta para un Negroni").<sup>21</sup>
  - **Calificación Automatizada y Retroalimentación Inmediata:** Los cuestionarios se calificarán automáticamente, proporcionando a los estudiantes resultados instantáneos e indicando las respuestas incorrectas para facilitar el aprendizaje.<sup>22</sup>

#### **El Módulo de Entrega de Habilidades Prácticas**

- **Funcionalidad:** Gestionar el proyecto final "Cóctel de Autor".
- **Características:**
  - **Formulario de Entrega Estructurado:** Una interfaz dedicada donde los estudiantes no solo suben un archivo. Deberán completar campos específicos: Nombre del Cóctel, Concepto/Historia, Destilado Base (incluyendo la opción "Licor Casero"), Lista de Ingredientes y Método de Preparación paso a paso.
  - **Carga de Multimedia:** Los estudiantes deberán subir una foto de alta calidad de la bebida final y un video corto que demuestre su creación o una técnica clave. Esto constituye una forma de evaluación práctica a través de video.<sup>23</sup>
  - **Rúbrica de Evaluación:** Los instructores calificarán la entrega utilizando una rúbrica predefinida y visible para el estudiante, con criterios como Creatividad, Presentación, Técnica Aplicada y Equilibrio de la Receta. Esto proporciona una retroalimentación transparente, justa y estructurada.<sup>6</sup>
- **Certificación:** Al completar con éxito todos los módulos requeridos y aprobar las evaluaciones finales, el sistema generará automáticamente un Certificado de Finalización imprimible y verificable.<sup>20</sup> Este podría incluir un código QR o un enlace único para su validación por parte de terceros.

### **Panel de Informes y Analíticas**

Una sección dedicada para que Administradores e Instructores puedan monitorear el rendimiento de la plataforma y de los alumnos.<sup>17</sup>

- **Métricas Clave:**
  - Tasas de finalización de cursos.
  - Seguimiento del progreso individual de los estudiantes.
  - Puntuaciones de los cuestionarios y tasas de aprobación/reprobación.
  - Análisis de las preguntas más falladas para identificar temas difíciles.
  - Tiempo invertido por los alumnos en lecciones o módulos.

La solicitud del usuario de dos tipos de evaluación distintos revela una tensión pedagógica fundamental en la formación profesional: el equilibrio entre la **estandarización** (dominar los clásicos) y la **personalización** (desarrollar un estilo único). Un LMS genérico podría intentar forzar ambos tipos de evaluación en una única herramienta de "tarea", lo cual sería ineficaz. La arquitectura de la plataforma debe, por tanto, soportar explícitamente ambos modos de aprendizaje. La solución más innovadora y efectiva es diseñar dos motores de evaluación distintos y especialmente diseñados: uno para la memorización objetiva y otro para la aplicación creativa. Esta decisión arquitectónica, impulsada por una profunda comprensión de la necesidad pedagógica, garantiza que la plataforma se alinee perfectamente con los objetivos de formación del mundo real de la Bar Academy, pasando de ser una lista de características genéricas a un instrumento educativo a medida.

## **La Base de Datos: Un Modelo Relacional**

Esta sección proporciona el plano técnico de la base de datos, diseñada para ser escalable, íntegra y de alto rendimiento. Se basará en patrones de esquemas de LMS establecidos <sup>25</sup> pero personalizados para las características específicas del proyecto.

### **Descripción del Diagrama Entidad-Relación (DER)**

Antes de detallar las tablas, se describe el modelo conceptual. El sistema se centrará en entidades clave como Usuarios, Cursos, Módulos y Lecciones. Las relaciones fundamentales gobernarán sus interacciones. Por ejemplo, existirá una relación de muchos a muchos entre Usuarios y Cursos, gestionada a través de una tabla intermedia llamada Inscripciones. Un Curso tendrá muchas Módulos, y un Módulo tendrá muchas Lecciones, estableciendo relaciones de uno a muchos. Este enfoque garantiza una estructura lógica y normalizada.

### **Definición del Esquema de la Base de Datos**

Este es el artefacto técnico más crítico del documento, proporcionando una "única fuente de verdad" para los desarrolladores del backend. Un esquema detallado previene la redundancia de datos y asegura la integridad a través de una normalización y restricciones adecuadas.<sup>25</sup> Al diseñar el esquema desde el principio, se asegura que todas las funcionalidades, especialmente las complejas de evaluación y gamificación, tengan las estructuras de datos necesarias para su soporte.

| Nombre de la Tabla | Columna | Tipo de Dato | Restricciones | Descripción |
| --- | --- | --- | --- | --- |
| **users** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único del usuario. |
| --- | --- | --- | --- | --- |
|     | name | VARCHAR(255) | NOT NULL | Nombre completo del usuario. |
| --- | --- | --- | --- | --- |
|     | email | VARCHAR(255) | NOT NULL, UNIQUE | Correo electrónico del usuario. |
| --- | --- | --- | --- | --- |
|     | password | VARCHAR(255) | NOT NULL | Contraseña hasheada. |
| --- | --- | --- | --- | --- |
|     | role | ENUM('admin', 'instructor', 'student', 'evaluator') | NOT NULL, DEFAULT 'student' | Rol del usuario en el sistema. |
| --- | --- | --- | --- | --- |
|     | created_at, updated_at | TIMESTAMP |     | Marcas de tiempo de creación/actualización. |
| --- | --- | --- | --- | --- |
| **courses** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único del curso. |
| --- | --- | --- | --- | --- |
|     | title | VARCHAR(255) | NOT NULL | Título del curso. |
| --- | --- | --- | --- | --- |
|     | slug | VARCHAR(255) | NOT NULL, UNIQUE | URL amigable para el curso. |
| --- | --- | --- | --- | --- |
|     | description | TEXT |     | Descripción detallada del curso. |
| --- | --- | --- | --- | --- |
|     | instructor_id | INT | FK to users.id | ID del instructor que imparte el curso. |
| --- | --- | --- | --- | --- |
|     | price | DECIMAL(10, 2) |     | Precio del curso. |
| --- | --- | --- | --- | --- |
|     | published_status | BOOLEAN | NOT NULL, DEFAULT 0 | Indica si el curso es visible para los estudiantes. |
| --- | --- | --- | --- | --- |
| **modules** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único del módulo. |
| --- | --- | --- | --- | --- |
|     | course_id | INT | FK to courses.id | Curso al que pertenece el módulo. |
| --- | --- | --- | --- | --- |
|     | title | VARCHAR(255) | NOT NULL | Título del módulo. |
| --- | --- | --- | --- | --- |
|     | order | INT |     | Orden de aparición del módulo en el curso. |
| --- | --- | --- | --- | --- |
| **lessons** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único de la lección. |
| --- | --- | --- | --- | --- |
|     | module_id | INT | FK to modules.id | Módulo al que pertenece la lección. |
| --- | --- | --- | --- | --- |
|     | title | VARCHAR(255) | NOT NULL | Título de la lección. |
| --- | --- | --- | --- | --- |
|     | content_type | ENUM('text', 'video', 'pdf') |     | Tipo de contenido de la lección. |
| --- | --- | --- | --- | --- |
|     | content_body | LONGTEXT | NULLABLE | Contenido de texto o HTML. |
| --- | --- | --- | --- | --- |
|     | video_url | VARCHAR(255) | NULLABLE | URL del video (si aplica). |
| --- | --- | --- | --- | --- |
| **enrollments** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único de la inscripción. |
| --- | --- | --- | --- | --- |
|     | user_id | INT | FK to users.id | Estudiante inscrito. |
| --- | --- | --- | --- | --- |
|     | course_id | INT | FK to courses.id | Curso en el que se inscribe. |
| --- | --- | --- | --- | --- |
|     | enrollment_date | TIMESTAMP |     | Fecha de inscripción. |
| --- | --- | --- | --- | --- |
|     | completion_status | BOOLEAN | DEFAULT 0 | Indica si el curso ha sido completado. |
| --- | --- | --- | --- | --- |
|     | completed_at | TIMESTAMP | NULLABLE | Fecha de finalización del curso. |
| --- | --- | --- | --- | --- |
| **quizzes** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único del cuestionario. |
| --- | --- | --- | --- | --- |
|     | course_id | INT | FK to courses.id | Curso al que pertenece el cuestionario. |
| --- | --- | --- | --- | --- |
|     | title | VARCHAR(255) | NOT NULL | Título del cuestionario. |
| --- | --- | --- | --- | --- |
|     | time_limit_minutes | INT |     | Límite de tiempo para completar. |
| --- | --- | --- | --- | --- |
| **quiz_questions** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único de la pregunta. |
| --- | --- | --- | --- | --- |
|     | quiz_id | INT | FK to quizzes.id | Cuestionario al que pertenece. |
| --- | --- | --- | --- | --- |
|     | question_text | TEXT | NOT NULL | El texto de la pregunta. |
| --- | --- | --- | --- | --- |
| **question_options** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único de la opción. |
| --- | --- | --- | --- | --- |
|     | question_id | INT | FK to quiz_questions.id | Pregunta a la que pertenece la opción. |
| --- | --- | --- | --- | --- |
|     | option_text | TEXT | NOT NULL | El texto de la opción de respuesta. |
| --- | --- | --- | --- | --- |
|     | is_correct | BOOLEAN | NOT NULL, DEFAULT 0 | Indica si esta es la respuesta correcta. |
| --- | --- | --- | --- | --- |
| **quiz_attempts** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único del intento. |
| --- | --- | --- | --- | --- |
|     | user_id | INT | FK to users.id | Usuario que realiza el intento. |
| --- | --- | --- | --- | --- |
|     | quiz_id | INT | FK to quizzes.id | Cuestionario que se intenta. |
| --- | --- | --- | --- | --- |
|     | start_time | TIMESTAMP |     | Momento en que inicia el intento. |
| --- | --- | --- | --- | --- |
|     | end_time | TIMESTAMP |     | Momento en que finaliza el intento. |
| --- | --- | --- | --- | --- |
|     | score | DECIMAL(5, 2) |     | Puntuación obtenida. |
| --- | --- | --- | --- | --- |
| **assignments** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único de la tarea (proyecto). |
| --- | --- | --- | --- | --- |
|     | course_id | INT | FK to courses.id | Curso al que pertenece la tarea. |
| --- | --- | --- | --- | --- |
|     | title | VARCHAR(255) | NOT NULL | Título de la tarea (ej. "Cóctel de Autor"). |
| --- | --- | --- | --- | --- |
| **submissions** | id  | INT | PK, UNSIGNED, AUTO_INCREMENT | Identificador único de la entrega. |
| --- | --- | --- | --- | --- |
|     | assignment_id | INT | FK to assignments.id | Tarea a la que corresponde la entrega. |
| --- | --- | --- | --- | --- |
|     | user_id | INT | FK to users.id | Estudiante que realiza la entrega. |
| --- | --- | --- | --- | --- |
|     | submission_data | JSON |     | Datos estructurados de la entrega (texto, URLs). |
| --- | --- | --- | --- | --- |
|     | grade | DECIMAL(5, 2) | NULLABLE | Calificación de la entrega. |
| --- | --- | --- | --- | --- |
|     | feedback_text | TEXT | NULLABLE | Comentarios del instructor. |
| --- | --- | --- | --- | --- |

Un esquema de base de datos bien diseñado para un LMS no es solo un almacén de datos; es un registro de eventos. Debe estar diseñado para el análisis temporal (seguimiento de cambios a lo largo del tiempo) para proporcionar información profunda sobre los comportamientos de aprendizaje. Mientras que los esquemas básicos almacenan el estado actual (un curso está completo) <sup>25</sup>, los informes avanzados requieren saber

_cómo_ y _cuándo_ sucedieron las cosas.<sup>24</sup> Para responder preguntas como "¿Cuánto tiempo tardó un estudiante en completar el Módulo 3?", la base de datos debe registrar eventos. La tabla

enrollments no solo debe tener un booleano completion_status, sino también un completed_at con marca de tiempo. La tabla quiz_attempts es inherentemente un registro de eventos. Este enfoque de modelado de datos transforma la base de datos de una simple máquina de estados a una rica fuente para la analítica del aprendizaje, una decisión de diseño con visión de futuro que habilita potentes características posteriores.

## **Mejorando la Experiencia: Características Innovadoras e Interactivas**

Esta sección aborda directamente la solicitud del usuario de "ideas innovadoras", centrándose en funcionalidades que aprovechan la tecnología para resolver los desafíos únicos de la formación profesional online y hacer el aprendizaje más atractivo y efectivo.

### **Gamificando la Ruta de Aprendizaje**

La estrategia consiste en aplicar mecánicas de juego para motivar la acción y promover el aprendizaje.<sup>9</sup> El objetivo es aumentar el compromiso, la retención de conocimientos y las tasas de finalización de cursos <sup>29</sup>, una técnica particularmente efectiva en la formación profesional (VET).<sup>30</sup>

Mecánicas Propuestas <sup>32</sup>:

- **Puntos y Experiencia (XP):** Se otorgarán puntos por completar lecciones, ver videos y obtener buenas calificaciones en los cuestionarios. La acumulación de XP permitirá a los estudiantes "subir de nivel", pasando de "Ayudante de Bar" a "Bartender" y finalmente a "Mixólogo".
- **Insignias (Badges):** Se concederán insignias digitales por logros específicos, como "Historiador de Cócteles Clásicos" por dominar el módulo de historia, "Maestro del Agave" por completar el módulo de Tequila, o "Servicio Impecable" por una evaluación práctica positiva.
- **Tablas de Clasificación (Leaderboards):** Se mostrarán clasificaciones semanales o históricas con las puntuaciones más altas en los cuestionarios y los XP acumulados, fomentando una competencia sana y amistosa entre los estudiantes.
- **Misiones de Aprendizaje (Quests):** Se pueden enmarcar series de módulos como una "misión". Por ejemplo, "La Misión del Speakeasy de la Ley Seca", donde los estudiantes aprenden sobre cócteles clásicos de esa época y desbloquean una insignia especial al completarla.

### **El Agitador Virtual: Un Simulador de Cócteles Interactivo**

Este concepto introduce una herramienta práctica para superar el desafío de enseñar habilidades manuales en un entorno online.<sup>23</sup>

- **Concepto:** Un minijuego interactivo basado en la web donde los estudiantes pueden practicar la elaboración de cócteles en un entorno seguro y sin costes de material. La inspiración proviene de simuladores existentes como el iBar Simulator.<sup>33</sup>
- **Características:**
  - Una interfaz 2D que muestra una barra, estanterías con cristalería, un contenedor de hielo y estantes con licores, destilados, zumos y guarniciones virtuales.
  - **Modo Receta:** El estudiante selecciona un cóctel y la receta se muestra en pantalla. Debe arrastrar y soltar los ingredientes correctos en las proporciones adecuadas en la coctelera o el vaso.
  - **Modo Desafío:** El sistema emite una "orden" (ej. "Prepara un Daiquiri"), y el estudiante debe recordar la receta de memoria y prepararla contrarreloj.
  - **Retroalimentación:** El sistema proporciona feedback instantáneo: "¡Correcto!", "Ingrediente equivocado" o "Cristalería incorrecta".

### **El Laboratorio de Cócteles de Autor**

Este concepto eleva el proyecto final de una simple carga de archivos a la creación de una pieza de portafolio profesional.

- **Concepto:** Una interfaz de usuario dedicada y guiada para el proyecto final.
- **Características:**
  - **Proceso de Creación Guiado:** Un formulario de varios pasos que guía al estudiante a través de la documentación de su proceso creativo: Ideación, Selección de Ingredientes (especialmente el licor casero), Desarrollo de la Receta y Presentación/Guarnición.
  - **Portafolio Visual:** Una vista final que presenta la entrega del estudiante en un formato elegante y profesional, mostrando sus fotos, video y texto. Este resultado se convierte en un activo compartible para el uso profesional del estudiante.
  - **Revisión por Pares (Opcional):** Como una funcionalidad avanzada, se podría permitir que los estudiantes vean y comenten de forma constructiva los cócteles de autor de sus compañeros, fomentando una comunidad de aprendizaje colaborativo.<sup>21</sup>

Las innovaciones más impactantes son aquellas que crean un "ciclo de retroalimentación" entre las diferentes partes de la experiencia de aprendizaje. El simulador, los cuestionarios y los proyectos prácticos no deben ser características aisladas. Si un estudiante falla las preguntas sobre cócteles "sour" en un cuestionario, el sistema podría identificar esta brecha de conocimiento y recomendarle practicar recetas específicas en el Simulador Virtual. Esto es aprendizaje adaptativo.<sup>17</sup> Después de practicar en el simulador, el estudiante vuelve a realizar el cuestionario, mejora su puntuación y gana una insignia de "Superación". Esto crea un ciclo virtuoso:

**Evaluar -> Identificar Brecha -> Practicar en el Simulador -> Reevaluar -> Recompensar**. Esta interconexión transforma una colección de características en un sistema de aprendizaje inteligente y personalizado.

## **Arquitectura del Sistema y Guías de Implementación**

Esta sección final proporciona orientación técnica de alto nivel para el equipo de desarrollo de estudiantes, cubriendo los requisitos no funcionales y los flujos de trabajo clave, y conectando el diseño abstracto con la implementación concreta en Laravel.

### **Requisitos No Funcionales**

Estos son los criterios de calidad que el sistema debe cumplir:

- **Seguridad:** Implementar políticas de contraseñas seguras, proteger contra inyección SQL y Cross-Site Scripting (XSS), y asegurar que el modelo RBAC se aplique estrictamente en todo el sistema. Todos los datos sensibles deben manejarse de forma segura.<sup>10</sup>
- **Rendimiento:** Utilizar consultas de base de datos eficientes, implementar caché para el contenido de acceso frecuente (como videos de lecciones) y optimizar imágenes para garantizar tiempos de carga rápidos.
- **Diseño Adaptable (Responsive):** Toda la plataforma debe ser completamente funcional y fácil de usar en todos los dispositivos (escritorios, tabletas y teléfonos inteligentes), ya que los estudiantes modernos esperan acceder al contenido en cualquier momento y lugar.<sup>17</sup>
- **Escalabilidad:** La arquitectura debe estar preparada para soportar un número creciente de usuarios y cursos sin una degradación del rendimiento.

### **Flujos de Trabajo Clave del Sistema**

A continuación, se describen los procesos lógicos paso a paso para las operaciones críticas del sistema. Estos flujos pueden ser fácilmente traducidos a diagramas de flujo por el equipo de desarrollo.

- **Registro de Nuevo Usuario e Inscripción a un Curso:**
    1. El usuario visita la página de registro y completa el formulario.
    2. El sistema valida los datos y crea una nueva entrada en la tabla users con el rol 'student'.
    3. El usuario inicia sesión y navega al catálogo de cursos.
    4. Selecciona un curso y procede a la inscripción (y pago, si aplica).
    5. El sistema crea un nuevo registro en la tabla enrollments, vinculando al user_id con el course_id.
- **Creación y Publicación de un Curso por el Instructor:**
    1. El instructor inicia sesión y accede a su panel de gestión de cursos.
    2. Crea un nuevo curso, rellenando título, descripción, etc. El curso se guarda con published_status en 0 (borrador).
    3. Dentro del curso, crea módulos y lecciones, subiendo contenido (videos, texto).
    4. Crea los cuestionarios y tareas asociados al curso.
    5. Cuando el curso está listo, cambia el published_status a 1, haciéndolo visible en el catálogo.
- **Intento y Calificación de un Cuestionario por el Estudiante:**
    1. El estudiante navega a una lección de tipo cuestionario y hace clic en "Comenzar".
    2. El sistema crea un registro en quiz_attempts con la hora de inicio.
    3. El estudiante responde a las preguntas y hace clic en "Finalizar".
    4. El sistema registra las respuestas del usuario en user_answers, calcula la puntuación, actualiza el registro en quiz_attempts con la puntuación y la hora de finalización, y muestra el resultado al estudiante.
- **Entrega y Evaluación del Proyecto del Estudiante:**
    1. El estudiante accede a la página de la tarea "Cóctel de Autor".
    2. Completa el formulario estructurado y sube sus archivos (foto, video).
    3. El sistema crea un registro en la tabla submissions.
    4. El instructor recibe una notificación y accede a la página de evaluación.
    5. El instructor revisa la entrega, asigna una calificación y escribe su feedback.
    6. El sistema actualiza el registro en submissions con la calificación y el feedback. El estudiante es notificado.

### **Inventario de Interfaces de Usuario**

Esta es una lista definitiva de las principales pantallas (vistas/páginas) que los estudiantes necesitarán construir, respondiendo directamente a la solicitud de "cantidad de interfaces".

- **Públicas:**
  - Página de Inicio (Homepage)
  - Catálogo de Cursos
  - Página de Detalle del Curso
  - Página de Inicio de Sesión / Registro
- **Para Estudiantes:**
  - Panel de Control (Dashboard)
  - Mis Cursos
  - Vista de la Lección
  - Interfaz del Cuestionario
  - Página de Entrega del Proyecto
  - Mi Perfil
- **Para Instructores:**
  - Panel de Control del Instructor
  - Lista de Gestión de Cursos
  - Editor del Curso (con gestión de Módulos/Lecciones)
  - Lista de Estudiantes del Curso (Roster)
  - Libro de Calificaciones (Gradebook)
  - Vista de Analíticas del Curso
- **Para Administradores:**
  - Panel de Administración
  - Gestión de Usuarios
  - Configuración del Sistema
  - Gestión de Categorías de Cursos
  - Analíticas Globales del Sitio

La elección del framework Laravel para este proyecto no es un mero detalle de implementación; es una ventaja estratégica que debe ser aprovechada activamente. Esta documentación debe guiar a los estudiantes sobre _cómo_ utilizar las características específicas de Laravel para construir el sistema propuesto de manera eficiente y robusta. Por ejemplo, al discutir el "Esquema de la Base de Datos" (Sección 4), se debe mencionar que este puede ser implementado usando **Migraciones de Laravel**. Al hablar de los "Roles de Usuario" (Sección 2), se debe hacer referencia a los **Gates y Policies** de Laravel para la autorización. Para el "Inventario de Interfaces" (Sección 6.3), se puede sugerir el uso de **Componentes de Blade** para elementos de UI reutilizables. Este enfoque conecta las decisiones de alto nivel directamente con las herramientas que los estudiantes deben usar, convirtiendo este documento en una guía práctica de implementación además de una especificación funcional.

#### Obras citadas

1. Bar Academy Santiago, fecha de acceso: julio 17, 2025, <https://santiago.baracademy.cl/>
2. Bar Academy Valparaiso – Bartenders y Baristas de Alto Rendimiento, fecha de acceso: julio 17, 2025, <https://valparaiso.baracademy.cl/>
3. Vision, Mission, and Values eNyota Learning - eLearning Solutions for Businesses, fecha de acceso: julio 17, 2025, <https://enyotalearning.com/vision-mission-values/>
4. Mission & Values - Online Learning Consortium, fecha de acceso: julio 17, 2025, <https://onlinelearningconsortium.org/about/mission-values/>
5. 10 Steps For Creating An eLearning Project Plan From Scratch - Skill Dynamics, fecha de acceso: julio 17, 2025, <https://skilldynamics.com/blog/steps-creating-elearning-project-plan-from-scratch/>
6. Scope Your Learning Project Before Designing It, fecha de acceso: julio 17, 2025, <https://www.learningguild.com/articles/scope-your-learning-project-before-designing-it>
7. Our Online High School's Mission, Vision & Values - Sterling Academy, fecha de acceso: julio 17, 2025, <https://www.sterling.academy/online-high-school-vision-mission-values>
8. CTL Mission, Vision, Values - Stanford Center for Teaching and Learning, fecha de acceso: julio 17, 2025, <https://ctl.stanford.edu/about-ctl/ctl-mission-vision-values>
9. Applying Gamification in Vocational and Professional and Education and Training (VPET) Classroom to Engage Students' Learning - The IAFOR Research Archive, fecha de acceso: julio 17, 2025, <http://papers.iafor.org/wp-content/uploads/papers/ace2016/ACE2016_33372.pdf>
10. Role-Based Access Control in LMS: A Comprehensive Guide - ooolab, fecha de acceso: julio 17, 2025, <https://www.thelearningos.com/enterprise-knowledge/role-based-access-control-in-lms-a-comprehensive-guide>
11. LMS User Roles for L&D Managers Explained (2024 Update) - Docebo, fecha de acceso: julio 17, 2025, <https://www.docebo.com/learning-network/blog/lms-user-roles/>
12. Beginner to professional: How to master role authorization in the LMS - U2D, fecha de acceso: julio 17, 2025, <https://u2d.de/en/blog/lms/role-authorization/>
13. How to Master LMS Responsibilities and Roles: Your Feature Guide, fecha de acceso: julio 17, 2025, <https://www.plutolms.com/blog/key-lms-concepts-user-management-user-roles>
14. Roles and Permissions Considerations for Instructional Leaders - Instructure Community, fecha de acceso: julio 17, 2025, <https://community.canvaslms.com/t5/Instructional-Leadership/Roles-and-Permissions-Considerations-for-Instructional-Leaders/ba-p/558601>
15. BARtender profesional - Bar Academy, fecha de acceso: julio 17, 2025, <http://www.baracademy.cl/wp-content/uploads/contenido/Programa_Bartender_Profesional_Santiago.pdf>
16. Building a learning platform: The schema | Hygraph, fecha de acceso: julio 17, 2025, <https://hygraph.com/blog/building-learning-platform-schema>
17. The top 30 features of learning management systems | Absorb LMS Software, fecha de acceso: julio 17, 2025, <https://www.absorblms.com/blog/the-top-30-features-of-learning-management-systems/>
18. What Essential Features Should An Ideal LMS Have In 2024? - eLearning Industry, fecha de acceso: julio 17, 2025, <https://elearningindustry.com/what-essential-features-should-an-ideal-lms-have-in-2024>
19. Best 10 Learning Management System (LMS) Features in 2025 - Rippling, fecha de acceso: julio 17, 2025, <https://www.rippling.com/blog/learning-management-system-features>
20. Scoping your e-learning project - Interactive Solutions, fecha de acceso: julio 17, 2025, <https://interactivesolutions.co.uk/e-learning-design-development/scoping-your-e-learning-project/>
21. 9 Ways to Assess Student Learning Online - iSpring, fecha de acceso: julio 17, 2025, <https://www.ispringsolutions.com/blog/8-ways-to-assess-online-student-learning>
22. Assessment in e-learning: How to use it - isEazy, fecha de acceso: julio 17, 2025, <https://www.iseazy.com/blog/assessment-in-e-learning-why-is-it-so-important-for-online-training/>
23. Practical Assessments: How to Ensure People Apply What They Learn, fecha de acceso: julio 17, 2025, <https://talentedlearning.com/practical-assessments-how-to-ensure-people-apply-what-they-learn/>
24. LMS features comparison: how to evaluate LMS features - AnyforSoft, fecha de acceso: julio 17, 2025, <https://anyforsoft.com/blog/lms-features/>
25. How to Design a Database for Online Learning Platform - GeeksforGeeks, fecha de acceso: julio 17, 2025, <https://www.geeksforgeeks.org/sql/how-to-design-a-database-for-online-learning-platform/>
26. How to Design a Database for Learning Management System (LMS) - GeeksforGeeks, fecha de acceso: julio 17, 2025, <https://www.geeksforgeeks.org/sql/how-to-design-a-database-for-learning-management-system-lms/>
27. Learning Management System Database Structure and Schema, fecha de acceso: julio 17, 2025, <https://databasesample.com/database/learning-management-system-database>
28. 11 Best Practices for Your Learning Management System - MemberClicks, fecha de acceso: julio 17, 2025, <https://memberclicks.com/blog/best-practices-for-your-learning-management-system/>
29. What is Gamification in E-Learning? - Articulate, fecha de acceso: julio 17, 2025, <https://www.articulate.com/blog/what-is-gamification-in-e-learning/>
30. Gamification and Game Based Learning for Vocational Education and Training: A Systematic Literature Review - PMC, fecha de acceso: julio 17, 2025, <https://pmc.ncbi.nlm.nih.gov/articles/PMC9838474/>
31. Gamification in vocational education and training - CAQA Compliance, fecha de acceso: julio 17, 2025, <https://caqa.com.au/blogs/news/gamification-in-vocational-education-and-training>
32. How Gamification is Transforming TVET Training, fecha de acceso: julio 17, 2025, <https://tvettrainer.com/how-gamification-is-transforming-tvet-training/>
33. Interactive Bartending Simulator: iBar, fecha de acceso: julio 17, 2025, <https://barsimulator.com/>