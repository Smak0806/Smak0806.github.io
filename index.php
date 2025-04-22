<?php
// Include the configuration file with global variables
require_once './config.php';

// Determine the language
$lang = 'es'; // Default language is Spanish
if (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en'])) {
    $lang = $_GET['lang'];
    // Set cookie to remember language preference for 30 days
    setcookie('preferred_lang', $lang, time() + (86400 * 30), "/");
} elseif (isset($_COOKIE['preferred_lang']) && in_array($_COOKIE['preferred_lang'], ['es', 'en'])) {
    $lang = $_COOKIE['preferred_lang'];
}

// Get content based on language
$content = $config;
$personal_info = getContent('personal_info', $lang);
$skills = getContent('skills', $lang);
$languages = getContent('languages', $lang);
$education = getContent('education', $lang);
$experience = getContent('experience', $lang);
$projects = getContent('projects', $lang);
$ui = getContent('ui', $lang);
$about = getContent('about', $lang);

echo "<script>console.log(".json_encode($config).");</script>";

// Function to get the alternate language
function altLang() {
    global $lang;
    return $lang === 'es' ? 'en' : 'es';
}

// Function to generate a language switch URL
function langSwitchUrl() {
    global $lang;
    $alt = altLang();
    $url = strtok($_SERVER["REQUEST_URI"], '?');
    return $url . '?lang=' . $alt;
}

// Alt language text
$altLangText = $lang === 'es' ? 'EN' : 'ES';

// Function to translate UI elements
function t($section, $key) {
    global $ui, $about, $skills, $experience, $education, $projects, $personal_info;
    
     if ($section == 'navbar') {
          return $ui['section_titles'][$key] ?? "Missing text";
     } elseif ($section == 'downloadCV') {
          return $ui['download_cv'] ?? "Download CV";
     } elseif ($section == 'hero') {
          if ($key == 'contact_me') return $ui['hero']['contact_me'];
          if ($key == 'linkedin') return $ui['hero']['linkedin'];
          if ($key == 'github') return $ui['hero']['github'];
     } elseif ($section == 'about') {
          if ($key == 'title') return $ui['section_titles']['about'];
          if ($key == 'personal_info') return $ui['about']['personal_info'];
          if ($key == 'location') return $ui['about']['location'];
          if ($key == 'from') return $ui['about']['from'];
          if ($key == 'living_in_spain') return $ui['about']['living_in_spain'];
          if ($key == 'birth_date') return $ui['about']['birth_date'];
          if ($key == 'email') return $ui['about']['email'];
          if ($key == 'professional_summary') return $ui['about']['professional_summary'];
          if ($key == 'professional_text1') return $ui['about']['professional_text1'];
          if ($key == 'professional_text2') return $ui['about']['professional_text2'];
     } elseif ($section == 'skills') {
          if ($key == 'title') return $ui['section_titles']['skills'] ?? "Skills";
          if ($key == 'languages_tab') return $ui['skills_section']['languages_tab'];
          if ($key == 'frameworks_tab') return $ui['skills_section']['frameworks_tab'];
          if ($key == 'tools_tab') return $ui['skills_section']['tools_tab'];
          if ($key == 'other_tab') return $ui['skills_section']['other_tab'];
          if ($key == 'languages_title') return $ui['section_titles']['languages'] ?? "Languages";
     } elseif ($section == 'experience') {
          if ($key == 'title') return $ui['section_titles']['experience'] ?? "Professional Experience";
          if ($key == 'to') return "to";
          if ($key == 'present') return $ui['current'] ?? "Present";
     } elseif ($section == 'education') {
          if ($key == 'title') return $ui['section_titles']['education'] ?? "Education";
          if ($key == 'to') return "to";
          if ($key == 'description') return $ui['education_section']['description'];
          if ($key == 'skills_gained') return $ui['education_section']['skills_gained'];
          if ($key == 'certificates') return $ui['education_section']['certificates'];
     } elseif ($section == 'projects') {
          if ($key == 'title') return $ui['section_titles']['projects'] ?? "Projects";
          if ($key == 'view_project') return $ui['view_project'] ?? "View Project";
     } elseif ($section == 'footer') {
          if ($key == 'rights') return "All rights reserved";
     }
    
    return "Missing text for: $section.$key";
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" data-theme="dark">
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

    <style>
          .hero {
               background-image: url('public/jumbo.webp');
               background-size: cover;
               background-position: center;
               background-repeat: no-repeat;
          }

    </style>
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
                         <li><a href="#about"><?= t('navbar', 'about') ?></a></li>
                         <li><a href="#skills"><?= t('navbar', 'skills') ?></a></li>
                         <li><a href="#experience"><?= t('navbar', 'experience') ?></a></li>
                         <li><a href="#education"><?= t('navbar', 'education') ?></a></li>
                         <li><a href="#projects"><?= t('navbar', 'projects') ?></a></li>
                    </ul>
               </div>
               <a class="btn btn-ghost normal-case text-xl font-maven">Santiago Cabrera</a>
          </div>
          <div class="navbar-center hidden lg:flex">
               <ul class="menu menu-horizontal px-1">
                    <li><a href="#about" class="hover:text-primary hover:bg-base-100"><?= t('navbar', 'about') ?></a></li>
                    <li><a href="#skills" class="hover:text-primary hover:bg-base-100"><?= t('navbar', 'skills') ?></a></li>
                    <li><a href="#experience" class="hover:text-primary hover:bg-base-100"><?= t('navbar', 'experience') ?></a></li>
                    <li><a href="#education" class="hover:text-primary hover:bg-base-100"><?= t('navbar', 'education') ?></a></li>
                    <li><a href="#projects" class="hover:text-primary hover:bg-base-100"><?= t('navbar', 'projects') ?></a></li>
               </ul>
          </div>
          <div class="navbar-end">
               <a href="<?= langSwitchUrl() ?>" class="btn btn-ghost mr-2">
                    <i class="fas fa-language mr-1"></i> <?= $altLangText ?>
               </a>
               <button id="downloadCV" class="btn btn-primary"><?= t('navbar', 'downloadCV') ?> <i class="fas fa-download ml-2"></i></button>
          </div>
     </nav>

    <!-- Hero Section -->
     <section class="hero min-h-[70vh] bg-base-200">
          <div class="hero-content flex-col lg:flex-row-reverse bg-black bg-opacity-70 p-10 rounded-lg shadow-lg">
               <div class="profile-image-container">
                    <img src="<?= $personal_info['photo'] ?>" class="max-w-sm rounded-lg shadow-2xl profile-image" alt="<?= $personal_info['name'] ?>">
               </div>
               <div>
                    <h1 class="text-5xl font-bold font-maven"><?= $personal_info['name'] ?></h1>
                    <h2 class="text-2xl mt-2 text-primary"><?= $personal_info['title'] ?></h2>
                    <p class="py-6 text-white"><?= $personal_info['about'] ?></p>
                    <div class="flex flex-wrap gap-3">
                         <a href="mailto:<?= $personal_info['email'] ?>" class="btn btn-primary">
                              <i class="fas fa-envelope mr-2"></i> <?= t('hero', 'contact_me') ?>
                         </a>
                         <a href="https://www.linkedin.com/in/santiago-cabrerag/" class="btn btn-outline btn-accent" id="linkedinBtn">
                              <i class="fab fa-linkedin mr-2"></i> <?= t('hero', 'linkedin') ?>
                         </a>
                         <a href="https://github.com/Smak0806" class="btn btn-outline" id="githubBtn">
                              <i class="fab fa-github mr-2"></i> <?= t('hero', 'github') ?>
                         </a>
                    </div>
               </div>
          </div>
     </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-base-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center font-maven"><?= t('about', 'title') ?></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="about-card p-6 bg-base-200 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4"><i class="fas fa-user-circle mr-2 text-primary"></i> <?= t('about', 'personal_info') ?></h3>
                    <ul class="space-y-3">
                        <li><strong><?= t('about', 'location') ?>:</strong> <?= $personal_info['location'] ?></li>
                        <li><strong><?= t('about', 'from') ?>:</strong> <?= $personal_info['birthplace'] ?> (<?= $personal_info['living_in_spain'] ?>)</li>
                        <li><strong><?= t('about', 'birth_date') ?>:</strong> <?= $personal_info['birthdate'] ?></li>
                        <li><strong><?= t('about', 'email') ?>:</strong> <a href="mailto:<?= $personal_info['email'] ?>" class="link link-primary"><?= $personal_info['email'] ?></a></li>
                    </ul>
                </div>
                <div class="about-card p-6 bg-base-200 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4"><i class="fas fa-laptop-code mr-2 text-primary"></i> <?= t('about', 'professional_summary') ?></h3>
                    <p><?= t('about', 'professional_text1') ?></p>
                    <p class="mt-3"><?= t('about', 'professional_text2') ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-16 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center font-maven"><?= t('skills', 'title') ?></h2>
            
            <div class="tabs tabs-boxed justify-center mb-8">
                <a class="tab skill-tab active" data-target="languages"><?= t('skills', 'languages_tab') ?></a>
                <a class="tab skill-tab" data-target="frameworks"><?= t('skills', 'frameworks_tab') ?></a>
                <a class="tab skill-tab" data-target="tools"><?= t('skills', 'tools_tab') ?></a>
                <a class="tab skill-tab" data-target="other"><?= t('skills', 'other_tab') ?></a>
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
            
            <h3 class="text-2xl font-semibold mt-12 mb-6 text-center"><?= t('skills', 'languages_title') ?></h3>
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
            <h2 class="text-3xl font-bold mb-8 text-center font-maven"><?= t('experience', 'title') ?></h2>
            
            <div class="timeline">
                <?php foreach ($experience as $index => $job): ?>
                <div class="timeline-item <?= $index % 2 === 0 ? 'left' : 'right' ?>">
                    <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all duration-300">
                        <div class="card-body">
                            <h3 class="card-title text-xl font-bold"><?= $job['title'] ?></h3>
                            <h4 class="text-lg text-primary"><?= $job['company'] ?></h4>
                            <p class="text-sm opacity-80">
                                <?= $job['location'] ?> | 
                                <?= $job['start_date'] ?> 
                                <?= t('experience', 'to') ?> 
                                <?= $job['end_date'] == 'Present' || $job['end_date'] == 'Actualidad' ? t('experience', 'present') : $job['end_date'] ?>
                            </p>
                            
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
            <h2 class="text-3xl font-bold mb-8 text-center font-maven"><?= t('education', 'title') ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($education as $edu): ?>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                    <div class="card-body">
                        <h3 class="card-title text-xl"><?= $edu['degree'] ?></h3>
                        <h4 class="text-lg text-primary"><?= $edu['field'] ?></h4>
                        <p class="text-sm opacity-80">
                            <?= $edu['institution'] ?>, <?= $edu['location'] ?> | 
                            <?= $edu['start_date'] ?> 
                            <?= t('education', 'to') ?> 
                            <?= $edu['end_date'] ?>
                        </p>
                        
                        <?php if (!empty($edu['description'])): ?>
                        <div class="mt-4">
                            <h5 class="font-medium mb-2"><?= t('education', 'description') ?></h5>
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
                            <h5 class="font-medium mb-2"><?= t('education', 'skills_gained') ?></h5>
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
                                    <i class="fas fa-certificate mr-2 text-yellow-500"></i> <?= t('education', 'certificates') ?>
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
            <h2 class="text-3xl font-bold mb-8 text-center font-maven"><?= t('projects', 'title') ?></h2>
            
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
                                <?= t('projects', 'view_project') ?> <i class="fas fa-external-link-alt ml-2"></i>
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
            <p>Don't ask me about PHP (: </p>
        </div> 
        <div>
            <div class="grid grid-flow-col gap-4">
                <a href="https://www.linkedin.com/in/santiago-cabrerag/" class="btn btn-circle btn-outline"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/Smak0806/" class="btn btn-circle btn-outline"><i class="fab fa-github"></i></a>
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
    
    <!-- Language handling script -->
    <script>
        // Add information about active language to body for CSS styling purposes
        document.body.setAttribute('data-lang', '<?= $lang ?>');
        
        // Handle skill tabs
        $(document).ready(function() {
            $('.skill-tab').click(function() {
                // Remove active class from all tabs
                $('.skill-tab').removeClass('active');
                // Add active class to clicked tab
                $(this).addClass('active');
                
                // Hide all content
                $('.skill-content').addClass('hidden');
                // Show content for clicked tab
                $('#' + $(this).data('target') + '-content').removeClass('hidden');
            });
            
            // Back to top button functionality
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('#backToTop').removeClass('opacity-0 invisible').addClass('opacity-100 visible');
                } else {
                    $('#backToTop').removeClass('opacity-100 visible').addClass('opacity-0 invisible');
                }
            });
            
            $('#backToTop').click(function() {
                $('html, body').animate({scrollTop: 0}, 500);
                return false;
            });
        });
    </script>
</body>
</html>