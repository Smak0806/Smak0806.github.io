<?php
// config.php - Global Variables Configuration

// Basic Information
$personal_info = [
    'name' => 'Santiago Miguel Cabrera Gonzalez',
    'title' => 'Full-Stack Developer',
    'email' => 'sancabwebdesign@gmail.com',
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
        'start_date' => '2005',
        'end_date' => '2010',
        'activities' => 'Artes plásticas, Lectura rápida (5.000 palabras / minuto), Fútbol, Italiano',
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
    ]
    // Add more projects as needed
];
?>