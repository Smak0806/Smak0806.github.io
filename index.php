<?php
// Include the configuration file with global variables
require_once './config.php';

// Function to generate a PDF version of the CV
function generatePDF() {
    // This function will be implemented to generate a PDF
    // compatible with European AI format
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $personal_info['name'] ?> - <?= $personal_info['title'] ?></title>
    
    <!-- Tailwind and DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        maven: ['"Maven Pro"', 'sans-serif']
                    },
                    colors: {
                        'primary-dark': '#1e1e2e',
                        'secondary-dark': '#2a2a3c',
                        'accent-blue': '#3b82f6',
                        'accent-purple': '#8b5cf6',
                        'text-light': '#f3f4f6',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-base-300 text-base-content font-sans">
    <!-- Navbar -->
    <nav class="navbar sticky top-0 z-50 bg-base-200 shadow-lg">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <i class="fas fa-bars"></i>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-200 rounded-box w-52">
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#projects">Projects</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl font-maven">Santiago Cabrera</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#about" class="hover:text-primary hover:bg-base-100">About</a></li>
                <li><a href="#skills" class="hover:text-primary hover:bg-base-100">Skills</a></li>
                <li><a href="#experience" class="hover:text-primary hover:bg-base-100">Experience</a></li>
                <li><a href="#education" class="hover:text-primary hover:bg-base-100">Education</a></li>
                <li><a href="#projects" class="hover:text-primary hover:bg-base-100">Projects</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <button id="downloadCV" class="btn btn-primary">Download CV <i class="fas fa-download ml-2"></i></button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero min-h-[70vh] bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="profile-image-container">
                <img src="<?= $personal_info['photo'] ?>" class="max-w-sm rounded-lg shadow-2xl profile-image" alt="<?= $personal_info['name'] ?>">
            </div>
            <div>
                <h1 class="text-5xl font-bold font-maven"><?= $personal_info['name'] ?></h1>
                <h2 class="text-2xl mt-2 text-primary"><?= $personal_info['title'] ?></h2>
                <p class="py-6"><?= $personal_info['about'] ?></p>
                <div class="flex flex-wrap gap-3">
                    <a href="mailto:<?= $personal_info['email'] ?>" class="btn btn-primary">
                        <i class="fas fa-envelope mr-2"></i> Contact Me
                    </a>
                    <a href="#" class="btn btn-outline btn-accent" id="linkedinBtn">
                        <i class="fab fa-linkedin mr-2"></i> LinkedIn
                    </a>
                    <a href="#" class="btn btn-outline" id="githubBtn">
                        <i class="fab fa-github mr-2"></i> GitHub
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-base-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center font-maven">About Me</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="about-card p-6 bg-base-200 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4"><i class="fas fa-user-circle mr-2 text-primary"></i> Personal Info</h3>
                    <ul class="space-y-3">
                        <li><strong>Location:</strong> <?= $personal_info['location'] ?></li>
                        <li><strong>From:</strong> <?= $personal_info['birthplace'] ?> (<?= $personal_info['living_in_spain'] ?>)</li>
                        <li><strong>Birth Date:</strong> <?= $personal_info['birthdate'] ?></li>
                        <li><strong>Email:</strong> <a href="mailto:<?= $personal_info['email'] ?>" class="link link-primary"><?= $personal_info['email'] ?></a></li>
                    </ul>
                </div>
                <div class="about-card p-6 bg-base-200 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4"><i class="fas fa-laptop-code mr-2 text-primary"></i> Professional Summary</h3>
                    <p>Full-stack developer with extensive experience in PHP, JavaScript, HTML, CSS, and SQL. Skilled in developing complete web applications from front-end to back-end, creating APIs, and implementing database solutions.</p>
                    <p class="mt-3">Throughout my career, I've worked independently and in teams, managing projects directly with clients and under product managers. I've adapted to various environments and technologies, always focused on delivering high-quality solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-16 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center font-maven">Skills & Expertise</h2>
            
            <div class="tabs tabs-boxed justify-center mb-8">
                <a class="tab skill-tab active" data-target="languages">Languages</a>
                <a class="tab skill-tab" data-target="frameworks">Frameworks</a>
                <a class="tab skill-tab" data-target="tools">Tools</a>
                <a class="tab skill-tab" data-target="other">Other</a>
            </div>
            
            <div class="skill-content" id="languages-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach ($skills['languages'] as $skill => $level): ?>
                    <div class="p-4 bg-base-100 rounded-lg shadow skill-item">
                        <div class="flex justify-between mb-1">
                            <span class="font-semibold"><?= $skill ?></span>
                            <span><?= $level ?>%</span>
                        </div>
                        <progress class="progress progress-primary" value="<?= $level ?>" max="100"></progress>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="skill-content hidden" id="frameworks-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach ($skills['frameworks'] as $skill => $level): ?>
                    <div class="p-4 bg-base-100 rounded-lg shadow skill-item">
                        <div class="flex justify-between mb-1">
                            <span class="font-semibold"><?= $skill ?></span>
                            <span><?= $level ?>%</span>
                        </div>
                        <progress class="progress progress-accent" value="<?= $level ?>" max="100"></progress>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="skill-content hidden" id="tools-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach ($skills['tools'] as $skill => $level): ?>
                    <div class="p-4 bg-base-100 rounded-lg shadow skill-item">
                        <div class="flex justify-between mb-1">
                            <span class="font-semibold"><?= $skill ?></span>
                            <span><?= $level ?>%</span>
                        </div>
                        <progress class="progress progress-secondary" value="<?= $level ?>" max="100"></progress>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="skill-content hidden" id="other-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach ($skills['other'] as $skill => $level): ?>
                    <div class="p-4 bg-base-100 rounded-lg shadow skill-item">
                        <div class="flex justify-between mb-1">
                            <span class="font-semibold"><?= $skill ?></span>
                            <span><?= $level ?>%</span>
                        </div>
                        <progress class="progress progress-info" value="<?= $level ?>" max="100"></progress>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <h3 class="text-2xl font-semibold mt-12 mb-6 text-center">Languages</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <?php foreach ($languages as $language => $level): ?>
                <div class="p-4 bg-base-100 rounded-lg shadow text-center">
                    <div class="radial-progress mx-auto" style="--value:<?= $level ?>; --size:8rem; --thickness: 0.8rem;" role="progressbar"><?= $level ?>%</div>
                    <p class="mt-3 font-medium"><?= $language ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-16 bg-base-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center font-maven">Professional Experience</h2>
            
            <div class="timeline">
                <?php foreach ($experience as $index => $job): ?>
                <div class="timeline-item <?= $index % 2 === 0 ? 'left' : 'right' ?>">
                    <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all duration-300">
                        <div class="card-body">
                            <h3 class="card-title text-xl font-bold"><?= $job['title'] ?></h3>
                            <h4 class="text-lg text-primary"><?= $job['company'] ?></h4>
                            <p class="text-sm opacity-80"><?= $job['location'] ?> | <?= $job['start_date'] ?> - <?= $job['end_date'] ?></p>
                            
                            <ul class="mt-4 space-y-2">
                                <?php foreach ($job['description'] as $item): ?>
                                <li class="flex">
                                    <i class="fas fa-angle-right text-primary mt-1 mr-2"></i>
                                    <span><?= $item ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            
                            <div class="card-actions justify-end mt-4">
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach ($job['technologies'] as $tech): ?>
                                    <span class="badge badge-primary"><?= $tech ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-16 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center font-maven">Education</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($education as $edu): ?>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="card-body">
                        <h3 class="card-title text-xl"><?= $edu['degree'] ?></h3>
                        <h4 class="text-lg text-primary"><?= $edu['field'] ?></h4>
                        <p class="text-sm opacity-80"><?= $edu['institution'] ?>, <?= $edu['location'] ?> | <?= $edu['start_date'] ?> - <?= $edu['end_date'] ?></p>
                        
                        <?php if (!empty($edu['description'])): ?>
                        <div class="mt-4">
                            <h5 class="font-medium mb-2">Description</h5>
                            <ul class="space-y-2">
                                <?php foreach ($edu['description'] as $item): ?>
                                <li class="flex">
                                    <i class="fas fa-angle-right text-primary mt-1 mr-2"></i>
                                    <span><?= $item ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (!empty($edu['skills_gained'])): ?>
                        <div class="mt-4">
                            <h5 class="font-medium mb-2">Skills Gained</h5>
                            <ul class="space-y-2">
                                <?php foreach ($edu['skills_gained'] as $skill): ?>
                                <li class="flex">
                                    <i class="fas fa-check text-accent mt-1 mr-2"></i>
                                    <span><?= $skill ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (!empty($edu['certificates'])): ?>
                        <div class="card-actions justify-start mt-4">
                            <div class="collapse collapse-arrow bg-base-200">
                                <input type="checkbox" /> 
                                <div class="collapse-title text-sm font-medium">
                                    <i class="fas fa-certificate mr-2 text-yellow-500"></i> Certificates
                                </div>
                                <div class="collapse-content"> 
                                    <ul class="space-y-2">
                                        <?php foreach ($edu['certificates'] as $cert): ?>
                                        <li>
                                            <a href="<?= $cert['url'] ?>" target="_blank" class="link link-primary">
                                                <?= $cert['name'] ?> <i class="fas fa-external-link-alt text-xs"></i>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 bg-base-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center font-maven">Projects</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($projects as $project): ?>
                <div class="card bg-base-200 shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <div class="card-body">
                        <h3 class="card-title"><?= $project['name'] ?></h3>
                        <p><?= $project['description'] ?></p>
                        <div class="flex flex-wrap gap-2 my-4">
                            <?php foreach ($project['technologies'] as $tech): ?>
                            <span class="badge badge-outline"><?= $tech ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="card-actions justify-end">
                            <a href="<?= $project['url'] ?>" target="_blank" class="btn btn-primary btn-sm">
                                View Project <i class="fas fa-external-link-alt ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content">
        <div>
            <p class="font-bold text-xl"><?= $personal_info['name'] ?></p>
            <p><?= $personal_info['title'] ?></p>
            <p>© <?= date('Y') ?> - All rights reserved</p>
        </div> 
        <div>
            <div class="grid grid-flow-col gap-4">
                <a href="#" class="btn btn-circle btn-outline"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="btn btn-circle btn-outline"><i class="fab fa-github"></i></a>
                <a href="mailto:<?= $personal_info['email'] ?>" class="btn btn-circle btn-outline"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="backToTop" class="btn btn-circle btn-primary fixed bottom-8 right-8 opacity-0 invisible transition-all duration-300">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>