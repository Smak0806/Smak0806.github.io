<?php
// config.php - Global Variables Configuration

// Basic Information
$personal_info = [
    'name' => 'Santiago Miguel Cabrera Gonzalez',
    'title' => 'Full-Stack Developer',
    'email' => 'santiago.cabrera0806@gmail.com',
    'location' => 'Valencia, Spain',
    'birthdate' => '08/06/1993',
    'birthplace' => 'Caracas, Venezuela',
    'address' => 'Burjassot - 46100',
    'has_vehicle' => true,
    'living_in_spain' => 'Since 2016',
    'photo' => 'assets/img/profile.jpg',
    'about' => 'Full-stack developer with 6+ years of experience specializing in PHP, JavaScript, SQL, and Git. Proficient in creating APIs with Laravel and documenting with Swagger. Experienced in handling API requests and callbacks, setting up CronJobs on servers, developing various features, and troubleshooting errors. Skilled in implementing UI/UX designs based on designer materials, performing SQL database queries, and working with Ionic-Angular for mobile app development.'
];

// Skills
$skills = [
    'languages' => [
        'HTML' => 90,
        'CSS' => 60,
        'JavaScript' => 65,
        'PHP' => 65,
        'SQL / MySQL' => 50
    ],
    'frameworks' => [
        'Bootstrap' => 60,
        'jQuery' => 50,
        'Laravel' => 60,
        'Next.js' => 40,
        'Tailwind CSS' => 55
    ],
    'tools' => [
        'Git' => 70,
        'NPM' => 50,
        'Node.js' => 45,
        'RESTful APIs' => 75,
        'Swagger' => 60
    ],
    'other' => [
        'Ionic (Angular)' => 40,
        'Google Ads' => 15,
        'Google Tag Manager' => 15,
        'Google Analytics' => 15
    ]
];

// Languages
$languages = [
    'Spanish' => 100,
    'English' => 70,
    'Italian' => 40,
    'French' => 30
];

// Education
$education = [
    [
        'degree' => 'Técnico Superior',
        'field' => 'Desarrollo de Aplicaciones Web (DAW)',
        'institution' => 'Aula Campus',
        'location' => 'Valencia, España',
        'start_date' => '2016',
        'end_date' => '2018',
        'activities' => 'HTML, CSS, JavaScript, PHP, JAVA, SQL, Scrum, Diagramas',
        'description' => [
            'Introducción a la programación mediante el aprendizaje de Java.',
            'Análisis, diagramas y manejo de bases de datos mediante consultas SQL/MySQL e interfaces gráficas.',
            'Elaboración de páginas web dinámicas y estáticas: HTML, CSS, Bootstrap, JavaScript, PHP, AJAX, jQuery.',
            'Análisis y elaboración de diagramas de planificación y trabajo.',
            'Conocimientos de Entornos de trabajo.',
            'Realización de FP-Dual. Total de 400 horas de práctica en campo laboral (Catastro, Sede de Valencia. Ministerio de Hacienda).'
        ],
        'skills_gained' => [
            'Administración de base de datos SQL y MySQL.',
            'Edición y estética de sitios web usando CSS3 y Bootstrap para aplicar \'responsive\'.',
            'Funciones y mejoras en JavaScript, jQuery y PHP.'
        ],
        'certificates' => [
            [
                'name' => 'ORACLE SQL',
                'url' => 'https://mylearn.oracle.com/ou/learning-path/oracle-database-explorer/79873'
            ],
            [
                'name' => 'Java SE 11 Developer',
                'url' => 'https://mylearn.oracle.com/ou/course/java-se-11-programming-complete/78835'
            ]
        ]
    ],
    [
        'degree' => 'Bachillerato',
        'field' => 'Mención: Ciencias',
        'institution' => 'Colegio Americo Vespucio',
        'location' => 'Caracas, Venezuela',
        'start_date' => '2008',
        'end_date' => '2010',
        'activities' => 'Francés',
        'description' => [],
        'skills_gained' => [],
        'certificates' => []
    ],
    [
     'degree' => 'Educación Secundaria',
     'field' => 'ESO',
     'institution' => 'Colegio Americo Vespucio',
     'location' => 'Caracas, Venezuela',
     'start_date' => '2005',
     'end_date' => '2008',
     'activities' => 'Artes plásticas, Lectura rápida (+5.000 palabras / minuto), Fútbol, Baloncesto, Italiano',
     'description' => [],
     'skills_gained' => [],
     'certificates' => []
 ]
];

// Professional Experience
$experience = [
     [
          'title' => 'Desarrollador Full-Stack',
          'company' => 'Movemo Ibérica, S.L.',
          'location' => 'Valencia, España',
          'start_date' => 'Ago. 2022',
          'end_date' => 'Actualidad',
          'type' => 'Jornada completa',
          'description' => [
               'Desarrollo de la plataforma www.momoven.es, tanto en back-end como en front-end.',
               'Stack: PHP, MySQL, jQuery, HTML, Bootstrap.',
               'Manejo de base de datos. Desde su creación, puesta en producción hasta las actualizaciones de sus datos.',
               'Manejo de versiones con Git.',
               'Sprints semanales controlados y documentados en Asana.',
               'Análisis de documentación e instalación e uso de librerías de terceros.',
               'Desarrollo de features, constante integración en producción.',
               'Stack de google: Google Analytics. Google Ads. Google Tag Manager.',
               'Creación de API usando los servicios de Laravel.',
               'Actualización de App: desarrollo de front-end con Ionic(Angular) y back-end en PHP nativo.'
          ],
          'technologies' => ['PHP', 'MySQL', 'jQuery', 'HTML', 'Bootstrap', 'Git', 'Asana', 'Google Analytics', 'Google Ads', 'Google Tag Manager', 'Laravel', 'Ionic', 'Angular']
     ],
     [
          'title' => 'Análisis de datos, desarrollador de Software, programador industrial (PLC) y desarrollo web (Full-Stack)',
          'company' => 'Eliwell Ibérica, S.A.',
          'location' => 'Valencia, España',
          'start_date' => 'Oct. 2018',
          'end_date' => 'Ago. 2022',
          'type' => 'Jornada completa',
          'description' => [
               'Análisis de datos para escritura de drivers ModBus para sistema Televis GO y Compact Touch de Eliwell.',
               'Asesoría y soporte técnico de redes industriales de protocolo ModBus.',
               'Análisis de manuales de uso y programación de instrumentos.',
               'Diseño y desarrollo de aplicaciones web. (JavaScript, NodeJs, PHP).',
               'Diseño y desarrollo de herramientas de trabajo y herramientas de análisis BI.',
               'Trato, asesoría y consultoría técnica directa con el cliente.'
          ],
          'technologies' => ['JavaScript', 'NodeJs', 'PHP', 'ModBus', 'BI Tools']
     ],
     [
          'title' => 'Desarrollo web Full-stack',
          'company' => 'Tewis Smart Systems',
          'location' => 'Valencia, España',
          'start_date' => 'Nov. 2018',
          'end_date' => 'Jun. 2021',
          'type' => 'Jornada completa',
          'description' => [
               'Desarrollo de catálogo digital interactivo. Un catálogo que permite seleccionar una máquina según los criterios y necesidades del usuario.',
               'Desarrollo Web y administración de la aplicación.',
               'Creación dinámica de fichas técnicas en PDF usando PHP.',
               'Administración de Base de Datos (Microsoft Access DB).'
          ],
          'technologies' => ['HTML5', 'JavaScript', 'AJAX', 'jQuery', 'PHP', 'CSS', 'SQL', 'MS Access']
     ],
     [
          'title' => 'Desarrollador web Full-Stack',
          'company' => 'Ministerio de Hacienda y Función Pública',
          'location' => 'Valencia, España',
          'start_date' => 'Sept. 2016',
          'end_date' => 'Jun. 2018',
          'type' => 'Prácticas',
          'description' => [
               'Prácticas realizadas en la Gerencia Regional de Catastro de Valencia.',
               '800 horas de prácticas en ámbito profesional no remuneradas.',
               'Mayormente trabajé con PHP, empecé desde cero y con la práctica, leyendo código y el manual de PHP, en poco tiempo ya estaba escribiendo código y creando cosas. Es el lenguaje que más me entretiene y con el que estoy más familiarizado.'
          ],
          'technologies' => ['Java', 'JSP', 'PHP', 'jQuery', 'Bootstrap', 'PostgreSQL', 'SQL', 'CSS', 'JavaScript', 'HTML5', 'WordPress']
     ]
];

// Projects
$projects = [
     [
          'name' => 'Momoven',
          'url' => 'http://www.momoven.es/flota-momoven',
          'description' => 'Plataforma de alquiler de motocicletas.',
          'technologies' => ['PHP', 'MySQL', 'jQuery', 'HTML', 'Bootstrap']
     ],
     [
          'name' => 'Fake Rally Rider',
          'url' => 'http://www.fakerallyrider.com',
          'description' => 'Website de alquiler de motos.',
          'technologies' => ['Next.js', 'Tailwind', 'CSS', 'TypeScript']
     ],
     [
          'name' => 'Qwertium.es',
          'url' => 'http://www.qwertium.es/',
          'description' => 'Página web de consultoría IT.',
          'technologies' => ['Next.js', 'Tailwind CSS']
     ]
    // Add more projects as needed
];


$config = [
     'es' => [
          'personal_info' => [
               'name' => 'Santiago Miguel Cabrera Gonzalez',
               'title' => 'Full-Stack Developer',
               'email' => 'santiago.cabrera0806@gmail.com',
               'location' => 'Valencia, Spain',
               'birthdate' => '08/06/1993',
               'birthplace' => 'Caracas, Venezuela',
               'address' => 'Burjassot - 46100',
               'has_vehicle' => true,
               'living_in_spain' => 'Viviendo en España desde 2016',
               'photo' => 'assets/img/profile.jpg',               
               'about' => 'Desarrollador full-stack con más de 6 años de experiencia, especializado en PHP, JavaScript, SQL y Git. Competente en la creación de APIs con Laravel y su documentación con Swagger. Con experiencia en la gestión de solicitudes y respuestas de APIs, configuración de CronJobs en servidores, desarrollo de diversas funcionalidades y resolución de errores. Hábil en la implementación de diseños UI/UX a partir de materiales proporcionados por diseñadores, realización de consultas en bases de datos SQL y trabajo con Ionic-Angular para el desarrollo de aplicaciones móviles.'
          ],
          'skills' => [
               'languages' => [
                    'HTML' => 90,
                    'CSS' => 60,
                    'JavaScript' => 65,
                    'PHP' => 65,
                    'SQL / MySQL' => 50
               ],
               'frameworks' => [
                    'Bootstrap' => 60,
                    'jQuery' => 50,
                    'Laravel' => 60,
                    'Next.js' => 40,
                    'Tailwind CSS' => 55
               ],
               'tools' => [
                    'Git' => 70,
                    'NPM' => 50,
                    'Node.js' => 45,
                    'RESTful APIs' => 75,
                    'Swagger' => 60
               ],
               'other' => [
                    'Ionic (Angular)' => 40,
                    'Google Ads' => 15,
                    'Google Tag Manager' => 15,
                    'Google Analytics' => 15
               ]
          ],
          'languages' => [
               'Spanish' => 100,
               'English' => 70,
               'Italian' => 40,
               'French' => 30
          ],
          'education' => [
               [
                    'degree' => 'Técnico Superior',
                    'field' => 'Desarrollo de Aplicaciones Web (DAW)',
                    'institution' => 'Aula Campus',
                    'location' => 'Valencia, España',
                    'start_date' => '2016',
                    'end_date' => '2018',
                    'activities' => 'HTML, CSS, JavaScript, PHP, JAVA, SQL, Scrum, Diagramas, Git',
                    'description' => [
                         'Introducción a la programación mediante el aprendizaje de Java y SQL.',
                         'Análisis, diagramas y manejo de bases de datos mediante consultas SQL/MySQL e interfaces gráficas.',
                         'Elaboración de páginas web dinámicas y estáticas: HTML, CSS, Bootstrap, JavaScript, PHP, AJAX, jQuery.',
                         'Análisis y elaboración de diagramas de planificación y trabajo. Conocimientos de Entornos de trabajo y control de versiones (Git).',
                         'Realización de FP-Dual. Total de 400 horas de práctica en campo laboral.'
                    ],
                    'skills_gained' => [
                         'Administración de base de datos SQL y MySQL.',                    
                         'Control de Versiones.',
                         'Creación de proyectos web desde cero, desde la base de datos hasta el front-end y el back-end, usando PHP y JavaScript.'
                    ],
                    'certificates' => [
                         [
                              'name' => 'ORACLE SQL',
                              'url' => 'https://mylearn.oracle.com/ou/learning-path/oracle-database-explorer/79873'
                         ],
                         [
                              'name' => 'Java SE 11 Developer',
                              'url' => 'https://mylearn.oracle.com/ou/course/java-se-11-programming-complete/78835'
                         ]
                    ]
               ],
               [
                    'degree' => 'Educación Secundaria (ESO) y Bachillerato',
                    'field' => 'Mención: Ciencias',
                    'institution' => 'U.E. Colegio Americo Vespucio',
                    'location' => 'Caracas, Venezuela',
                    'start_date' => '2005',
                    'end_date' => '2010',
                    'activities' => 'Artes plásticas, Fútbol, Baloncesto, Italiano. Extracurriculares: Lectura rápida (+5.000 palabras / minuto), Francés',
                    'description' => [
                         'Educación Secundaria y Bachillerato con mención en Ciencias.',
                         'Estudios de idioma Italiano.',
                         'Actividades artísticas como pintura y dibujo.',
                         'Actividades deportivas como béisbol, fútbol y baloncesto.',
                         'Entrenamiento en lectura rápida con enfoque en comprensión y retención.',
                         'Tesis (Trabajo final): Energía solar como alternativa para contrarestar la crisis energética en Venezuela. Aprobada con 19 puntos en escala de 20.',
                    ],
                    'skills_gained' => [                         
                         'Emprendimiento y desarrollo de ideas para Pymes.',
                         'Inglés nivel bilingüe, Italiano y Francés niveles medio.'
                    ],
                    'certificates' => [
                         [
                              'name' => 'Francés B1 - Alianza Francesa de Caracas',
                              'url' => 'https://afcaracas.com/inicio-alianza-francesa-caracas/cursos-de-frances/'
                         ]
                    ]
               ],               
          ],
          'experience' => [
               [
                    'title' => 'Desarrollador Full-Stack',
                    'company' => 'Movemo Ibérica, S.L.',
                    'location' => 'Valencia, España',
                    'start_date' => 'Ago. 2022',
                    'end_date' => 'Actualidad',
                    'type' => 'Jornada completa',
                    'description' => [
                         'Desarrollo de la plataforma www.momoven.es, tanto en back-end como en front-end.',
                         'Stack: PHP, MySQL, jQuery, HTML, Bootstrap.',
                         'Manejo de base de datos. Desde su creación, puesta en producción hasta las actualizaciones de sus datos.',
                         'Manejo de versiones con Git.',
                         'Sprints semanales controlados y documentados en Asana.',
                         'Análisis de documentación e instalación e uso de librerías de terceros.',
                         'Desarrollo de features, constante integración en producción.',
                         'Stack de google: Google Analytics. Google Ads. Google Tag Manager.',
                         'Creación de API usando los servicios de Laravel.',
                         'Actualización de App: desarrollo de front-end con Ionic(Angular) y back-end en PHP nativo.'
                    ],
                    'technologies' => ['PHP', 'MySQL', 'jQuery', 'HTML', 'Bootstrap', 'Git', 'Asana', 'Google Analytics', 'Google Ads', 'Google Tag Manager', 'Laravel', 'Ionic', 'Angular']
               ],
               [
                    'title' => 'Análisis de datos, desarrollador de Software, programador industrial (PLC) y desarrollo web (Full-Stack)',
                    'company' => 'Eliwell Ibérica, S.A.',
                    'location' => 'Valencia, España',
                    'start_date' => 'Oct. 2018',
                    'end_date' => 'Ago. 2022',
                    'type' => 'Jornada completa',
                    'description' => [
                         'Análisis de datos para escritura de drivers ModBus para sistema Televis GO y Compact Touch de Eliwell.',
                         'Asesoría y soporte técnico de redes industriales de protocolo ModBus.',
                         'Análisis de manuales de uso y programación de instrumentos.',
                         'Diseño y desarrollo de aplicaciones web. (JavaScript, NodeJs, PHP).',
                         'Diseño y desarrollo de herramientas de trabajo y herramientas de análisis BI.',
                         'Trato, asesoría y consultoría técnica directa con el cliente.'
                    ],
                    'technologies' => ['JavaScript', 'NodeJs', 'PHP', 'ModBus', 'BI Tools']
               ],
               [
                    'title' => 'Desarrollo web Full-stack',
                    'company' => 'Tewis Smart Systems',
                    'location' => 'Valencia, España',
                    'start_date' => 'Nov. 2018',
                    'end_date' => 'Jun. 2021',
                    'type' => 'Jornada completa',
                    'description' => [
                         'Desarrollo de catálogo digital interactivo. Un catálogo que permite seleccionar una máquina según los criterios y necesidades del usuario.',
                         'Desarrollo Web y administración de la aplicación.',
                         'Creación dinámica de fichas técnicas en PDF usando PHP.',
                         'Administración de Base de Datos (Microsoft Access DB).'
                    ],
                    'technologies' => ['HTML5', 'JavaScript', 'AJAX', 'jQuery', 'PHP', 'CSS', 'SQL', 'MS Access']
               ],
               [
                    'title' => 'Desarrollador web Full-Stack',
                    'company' => 'Ministerio de Hacienda y Función Pública',
                    'location' => 'Valencia, España',
                    'start_date' => 'Sept. 2016',
                    'end_date' => 'Jun. 2018',
                    'type' => 'Prácticas',
                    'description' => [
                         'Prácticas realizadas en la Gerencia Regional de Catastro de Valencia.',
                         '800 horas de prácticas en ámbito profesional no remuneradas.',
                         'Mayormente trabajé con PHP, empecé desde cero y con la práctica, leyendo código y el manual de PHP, en poco tiempo ya estaba escribiendo código y creando cosas. Es el lenguaje que más me entretiene y con el que estoy más familiarizado.'
                    ],
                    'technologies' => ['Java', 'JSP', 'PHP', 'jQuery', 'Bootstrap', 'PostgreSQL', 'SQL', 'CSS', 'JavaScript', 'HTML5', 'WordPress']
               ]
          ],
         'projects' => [
               [
                    'name' => 'Momoven',
                    'url' => 'http://www.momoven.es/flota-momoven',
                    'description' => 'Plataforma de alquiler de motocicletas.',
                    'technologies' => ['PHP', 'MySQL', 'jQuery', 'HTML', 'Bootstrap']
               ],
               [
                    'name' => 'Fake Rally Rider',
                    'url' => 'http://www.fakerallyrider.com',
                    'description' => 'Website de alquiler de motos.',
                    'technologies' => ['Next.js', 'Tailwind', 'CSS', 'TypeScript']
               ],
               [
                    'name' => 'Qwertium.es',
                    'url' => 'http://www.qwertium.es/',
                    'description' => 'Página web de consultoría IT.',
                    'technologies' => ['Next.js', 'Tailwind CSS']
               ]
          // Add more projects as needed
          ],
          'ui' => [
               'navbar' => [
                    'home' => 'Home',
                    'about' => 'Sobre Mí',
                    'skills' => 'Habilidades',
                    'experience' => 'Experiencia',
                    'education' => 'Educación',
                    'projects' => 'Proyectos',
                    'downloadCV' => 'Descargar CV',
               ],               
               'hero' => [
                    'contact_me' => 'Contáctame',
                    'linkedin' => 'LinkedIn',
                    'github' => 'GitHub'
               ],
               'about' => [
                    'title' => 'Sobre Mí',
                    'personal_info' => 'Información Personal',
                    'location' => 'Ubicación',
                    'from' => 'De',
                    'living_in_spain' => 'viviendo en España desde 2016',
                    'birth_date' => 'Fecha de Nacimiento',
                    'email' => 'Correo electrónico',
                    'professional_summary' => 'Resumen Profesional',
                    'professional_text1' => 'Desarrollador full-stack con más de 6 años de experiencia profesional, con un enfoque sólido en tecnologías backend y frontend como PHP, JavaScript, SQL y control de versiones con Git. A lo largo de mi carrera he trabajado en una amplia gama de aplicaciones y sistemas web, adquiriendo experiencia en el diseño de arquitecturas escalables, escritura de código limpio y mantenible, e integración de servicios de terceros.',
                    'professional_text2' => 'Alta competencia en la creación de APIs RESTful robustas utilizando Laravel, asegurando eficiencia y seguridad en la lógica del lado del servidor. También tengo experiencia en la documentación de APIs con Swagger (OpenAPI), elaborando referencias claras y accesibles tanto para equipos internos como para desarrolladores externos, lo que facilita una integración fluida y la colaboración en los proyectos. A lo largo de mi carrera, he trabajado de forma independiente y en equipos, gestionando proyectos directamente con clientes y bajo product managers. Me he adaptado a diversos entornos y tecnologías, siempre enfocado en entregar soluciones.'
               ],
               'section_titles' => [
                    'home' => 'Home',
                    'about' => 'Sobre Mí',
                    'skills' => 'Habilidades',
                    'experience' => 'Experiencia laboral',
                    'education' => 'Educación',
                    'projects' => 'Proyectos',
                    'downloadCV' => 'Descargar CV',
                    'languages' => 'Idiomas',
               ],
               'skills_section' => [
                    'languages_tab' => "Lenguajes de programación",
                    'frameworks_tab' => "Frameworks",
                    'tools_tab' => "Herramientas",
                    'other_tab' => "Otros"
               ],
               'education_section' => [
                    'description' => "Description",
                    'skills_gained' => "Skills Gained",
                    'certificates' => "Certificates",
               ],
          ],
          'footer' => [
               'contact_me' => 'Contáctame',
               'linkedin' => 'LinkedIn',
               'github' => 'GitHub'
          ],
          'about' => [
               'title' => 'Sobre Mí',
               'personal_info' => 'Información Personal',
               'location' => 'Ubicación',
               'from' => 'De',
               'living_in_spain' => 'viviendo en España',
               'birth_date' => 'Fecha de Nacimiento',
               'email' => 'Correo electrónico',
               'professional_summary' => 'Resumen Profesional',
               'professional_text1' => 'Desarrollador full-stack con más de 6 años de experiencia profesional, con un enfoque sólido en tecnologías backend y frontend como PHP, JavaScript, SQL y control de versiones con Git. A lo largo de mi carrera he trabajado en una amplia gama de aplicaciones y sistemas web, adquiriendo experiencia en el diseño de arquitecturas escalables, escritura de código limpio y mantenible, e integración de servicios de terceros.',
               'professional_text2' => 'Alta competencia en la creación de APIs RESTful robustas utilizando Laravel, asegurando eficiencia y seguridad en la lógica del lado del servidor. También tengo experiencia en la documentación de APIs con Swagger (OpenAPI), elaborando referencias claras y accesibles tanto para equipos internos como para desarrolladores externos, lo que facilita una integración fluida y la colaboración en los proyectos. A lo largo de mi carrera, he trabajado de forma independiente y en equipos, gestionando proyectos directamente con clientes y bajo product managers. Me he adaptado a diversos entornos y tecnologías, siempre enfocado en entregar soluciones.'
          ]
     ],
     'en' => [
         'personal_info' => [
               'name' => 'Santiago Miguel Cabrera Gonzalez',
               'title' => 'Full-Stack Developer',
               'email' => 'santiago.cabrera0806@gmail.com',
               'location' => 'Valencia, Spain',
               'birthdate' => '08/06/1993',
               'birthplace' => 'Caracas, Venezuela',
               'address' => 'Burjassot - 46100',
               'has_vehicle' => true,
               'living_in_spain' => 'Living in Spain since 2016',
               'photo' => 'assets/img/profile.jpg',
               'about' => 'Full-stack developer with 6+ years of experience specializing in PHP, JavaScript, SQL, and Git. Proficient in creating APIs with Laravel and documenting with Swagger. Experienced in handling API requests and callbacks, setting up CronJobs on servers, developing various features, and troubleshooting errors. Skilled in implementing UI/UX designs based on designer materials, performing SQL database queries, and working with Ionic-Angular for mobile app development.'
          ],
         'skills' => [
               'languages' => [
                    'HTML' => 90,
                    'CSS' => 60,
                    'JavaScript' => 65,
                    'PHP' => 65,
                    'SQL / MySQL' => 50
               ],
               'frameworks' => [
                    'Bootstrap' => 60,
                    'jQuery' => 50,
                    'Laravel' => 60,
                    'Next.js' => 40,
                    'Tailwind CSS' => 55
               ],
                    'tools' => [
                    'Git' => 70,
                    'NPM' => 50,
                    'Node.js' => 45,
                    'RESTful APIs' => 75,
                    'Swagger' => 60
               ],
               'other' => [
                    'Ionic (Angular)' => 40,
                    'Google Ads' => 15,
                    'Google Tag Manager' => 15,
                    'Google Analytics' => 15
               ]
          ],
         'languages' => [ 
               'Spanish' => 100,
               'English' => 70,
               'Italian' => 40,
               'French' => 30
          ],
         'education' => [
               [
                    'degree' => 'Higher Technician',
                    'field' => 'Web Application Development (DAW)',
                    'institution' => 'Aula Campus',
                    'location' => 'Valencia, Spain',
                    'start_date' => '2016',
                    'end_date' => '2018',
                    'activities' => 'HTML, CSS, JavaScript, PHP, JAVA, SQL, Scrum, Diagrams',
                    'description' => [
                         'Introduction to programming through Java learning.',
                         'Analysis, diagrams, and database management using SQL/MySQL queries and graphical interfaces.',
                         'Development of static and dynamic web pages: HTML, CSS, Bootstrap, JavaScript, PHP, AJAX, jQuery.',
                         'Analysis and development of planning and work diagrams.',
                         'Knowledge of work environments.',
                         'Dual vocational training. A total of 400 hours of field practice (Cadastre, Valencia Headquarters. Ministry of Finance).'
                    ],
                    'skills_gained' => [
                         'SQL and MySQL database administration.',
                         'Editing and styling websites using CSS3 and Bootstrap to apply responsive design.',
                         'Functions and improvements in JavaScript, jQuery, and PHP.'
                    ],
                    'certificates' => [
                         [
                              'name' => 'ORACLE SQL',
                              'url' => 'https://mylearn.oracle.com/ou/learning-path/oracle-database-explorer/79873'
                         ],
                         [
                              'name' => 'Java SE 11 Developer',
                              'url' => 'https://mylearn.oracle.com/ou/course/java-se-11-programming-complete/78835'
                         ]
                    ]
               ],
               [
                    'degree' => 'Secondary Education - High School Diploma',
                    'field' => 'Science Major',
                    'institution' => 'Colegio Americo Vespucio',
                    'location' => 'Caracas, Venezuela',
                    'start_date' => '2005',
                    'end_date' => '2010',
                    'activities' => 'Plastic arts, Speed reading (+5,000 words/min), Football, Basketball, Italian',
                    'description' => [
                         'Secondary Education',
                         'Science High School Diploma',
                         'Italian language studies',
                         'Artistic activities including painting and drawing',
                         'Sports activities including football and basketball',
                         'Speed reading training with a focus on comprehension and retention',
                    ],
                    'skills_gained' => [],
                    'certificates' => []
               ]
          ],
         'experience' => [
               [
                    'title' => 'Full-Stack Developer',
                    'company' => 'Movemo Ibérica, S.L.',
                    'location' => 'Valencia, Spain',
                    'start_date' => 'Aug. 2022',
                    'end_date' => 'Present',
                    'type' => 'Full-time',
                    'description' => [
                         'Development of the www.momoven.es platform, both backend and frontend.',
                         'Stack: PHP, MySQL, jQuery, HTML, Bootstrap.',
                         'Database management. From creation and production deployment to data updates.',
                         'Version control with Git.',
                         'Weekly sprints managed and documented on Asana.',
                         'Documentation analysis and third-party library installation and usage.',
                         'Feature development and continuous production integration.',
                         'Google stack: Google Analytics, Google Ads, Google Tag Manager.',
                         'API creation using Laravel services.',
                         'App update: frontend development with Ionic (Angular) and backend with native PHP.'
                    ],
                    'technologies' => [
                         'PHP', 'MySQL', 'jQuery', 'HTML', 'Bootstrap', 'Git', 'Asana', 'Google Analytics', 'Google Ads', 'Google Tag Manager', 'Laravel', 'Ionic', 'Angular'
                    ]
               ],
               [
                    'title' => 'Data Analyst, Software Developer, Industrial Programmer (PLC), and Full-Stack Web Developer',
                    'company' => 'Eliwell Ibérica, S.A.',
                    'location' => 'Valencia, Spain',
                    'start_date' => 'Oct. 2018',
                    'end_date' => 'Aug. 2022',
                    'type' => 'Full-time',
                    'description' => [
                         'Data analysis for writing ModBus drivers for Eliwell\'s Televis GO and Compact Touch systems.',
                         'Advisory and technical support for ModBus protocol industrial networks.',
                         'Manual analysis and instrument programming.',
                         'Web application design and development (JavaScript, NodeJs, PHP).',
                         'Development of work tools and BI analysis tools.',
                         'Client interaction, advisory, and technical consulting.'
                    ],
                    'technologies' => [
                         'JavaScript', 'NodeJs', 'PHP', 'ModBus', 'BI Tools'
                    ]
               ],
               [
                    'title' => 'Full-Stack Web Developer',
                    'company' => 'Tewis Smart Systems',
                    'location' => 'Valencia, Spain',
                    'start_date' => 'Nov. 2018',
                    'end_date' => 'Jun. 2021',
                    'type' => 'Full-time',
                    'description' => [
                         'Development of an interactive digital catalog allowing users to select machines based on their needs.',
                         'Web development and application management.',
                         'Dynamic generation of technical datasheets in PDF using PHP.',
                         'Database management (Microsoft Access DB).'
                    ],
                    'technologies' => [
                         'HTML5', 'JavaScript', 'AJAX', 'jQuery', 'PHP', 'CSS', 'SQL', 'MS Access'
                    ]
               ],
               [
                    'title' => 'Full-Stack Web Developer',
                    'company' => 'Ministry of Finance and Civil Service',
                    'location' => 'Valencia, Spain',
                    'start_date' => 'Sept. 2016',
                    'end_date' => 'Jun. 2018',
                    'type' => 'Internship',
                    'description' => [
                         'Internship carried out at the Regional Cadastre Office of Valencia.',
                         '800 hours of unpaid professional practice.',
                         'Mainly worked with PHP, starting from scratch and progressing through practice, reading code and PHP manuals. It quickly became my most enjoyable and familiar language.'
                    ],
                    'technologies' => [
                         'Java', 'JSP', 'PHP', 'jQuery', 'Bootstrap', 'PostgreSQL', 'SQL', 'CSS', 'JavaScript', 'HTML5', 'WordPress'
                    ]
               ]
          ],
         'projects' => [
               [
                    'name' => 'Momoven',
                    'url' => 'http://www.momoven.es/flota-momoven',
                    'description' => 'Motorbike rental platform.',
                    'technologies' => ['PHP', 'MySQL', 'jQuery', 'HTML', 'Bootstrap']
               ],
               [
                    'name' => 'Fake Rally Rider',
                    'url' => 'http://www.fakerallyrider.com',
                    'description' => 'Motorbike rental website.',
                    'technologies' => ['Next.js', 'Tailwind', 'CSS', 'TypeScript']
               ],
               [
                    'name' => 'Qwertium.es',
                    'url' => 'http://www.qwertium.es/',
                    'description' => 'IT consulting website.',
                    'technologies' => ['Next.js', 'Tailwind CSS']
               ]
          // Add more projects as needed
          ],
          'ui' => [
               'navbar' => [
                    'home' => 'Home',
                    'about' => 'About',
                    'skills' => 'Skills',
                    'experience' => 'Experience',
                    'education' => 'Education',
                    'projects' => 'Projects',
                    'downloadCV' => 'Download CV',
               ],
               'hero' => [
                    'contact_me' => 'Contact Me',
                    'linkedin' => 'LinkedIn',
                    'github' => 'GitHub'
               ],  
               'downloadCV' => 'Download CV',
               'about' => [
                    'title' => 'About Me',
                    'personal_info' => 'Personal Information',
                    'location' => 'Location',
                    'from' => 'From',
                    'living_in_spain' => 'Living in Spain since 2016',
                    'birth_date' => 'Birth Date',
                    'email' => 'Email',
                    'professional_summary' => 'Professional Summary',
                    'professional_text1' => 'Full-stack developer with over 6 years of professional experience, with a strong focus on backend and frontend technologies such as PHP, JavaScript, SQL, and version control using Git. Throughout my career, I have worked on a wide variety of web applications and systems, gaining solid expertise in designing scalable architectures, writing clean and maintainable code, and integrating third-party services.',
                    'professional_text2' => 'Highly proficient in building robust RESTful APIs using Laravel, ensuring efficiency and security in server-side logic. I also excel at documenting APIs with Swagger (OpenAPI), providing clear and user-friendly references for both internal teams and external developers, which facilitates seamless integration and collaboration across projects. Throughout my career, I have worked independently and in teams, managing projects directly with clients and under product managers. I have adapted to various environments and technologies, always focused on delivering solutions.'
               ],
               'section_titles' => [
                    'home' => 'Home',
                    'about' => 'About',
                    'skills' => 'Skills',
                    'experience' => 'Experience',
                    'education' => 'Education',
                    'projects' => 'Projects',
                    'downloadCV' => 'Download CV',
                    'languages' => 'Languages',
               ],
               'footer' => [
                    'contact_me' => 'Contact Me',
                    'linkedin' => 'LinkedIn',
                    'github' => 'GitHub'
               ],
               'skills_section' => [
                    'languages_tab' => "Programming Languages",
                    'frameworks_tab' => "Frameworks",
                    'tools_tab' => "Tools",
                    'other_tab' => "Other"
               ]
          ],
          'about' => [
               'title' => 'About Me',
               'personal_info' => 'Personal Information',
               'location' => 'Location',
               'from' => 'From',
               'living_in_spain' => 'Living in Spain since 2016',
               'birth_date' => 'Birth Date',
               'email' => 'Email',
               'professional_summary' => 'Professional Summary',
               'professional_text1' => 'Full-stack developer with over 6 years of professional experience, with a strong focus on backend and frontend technologies such as PHP, JavaScript, SQL, and version control using Git. Throughout my career, I have worked on a wide variety of web applications and systems, gaining solid expertise in designing scalable architectures, writing clean and maintainable code, and integrating third-party services.',
               'professional_text2' => 'Highly proficient in building robust RESTful APIs using Laravel, ensuring efficiency and security in server-side logic. I also excel at documenting APIs with Swagger (OpenAPI), providing clear and user-friendly references for both internal teams and external developers, which facilitates seamless integration and collaboration across projects. Throughout my career, I have worked independently and in teams, managing projects directly with clients and under product managers. I have adapted to various environments and technologies, always focused on delivering solutions.'
          ]
                  
     ]
];

// Helper function to get content based on current language
function getContent($key, $language = 'es') {
     global $config;
     return $config[$language][$key] ?? null;
}
?>