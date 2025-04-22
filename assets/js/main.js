$(document).ready(function() {
     // Theme switcher
     $('.theme-selector button').on('click', function() {
         const theme = $(this).data('set-theme');
         $('html').attr('data-theme', theme);
         localStorage.setItem('preferred-theme', theme);
     });
     
     // Load saved theme preference
     const savedTheme = localStorage.getItem('preferred-theme');
     if (savedTheme) {
         $('html').attr('data-theme', savedTheme);
     }
     
     // Smooth scrolling for anchor links
     $('a[href^="#"]').on('click', function(e) {
         e.preventDefault();
         const target = $(this.hash);
         if (target.length) {
             $('html, body').animate({
                 scrollTop: target.offset().top - 70
             }, 800);
         }
     });
     
     // Initialize animations
     checkAnimations();
     
     // Check for animations on scroll
     $(window).on('scroll', function() {
          checkAnimations();
     });
     
     // Check if elements are in viewport and animate them
     function checkAnimations() {
          $('.animate-on-scroll').each(function() {
               //const elementTop = $(this).offset().top;
               //const elementBottom = elementTop + $(this).outerHeight();
               //const elementTop = $(this).offset().top;
               //const elementBottom = elementTop + $(this).outerHeight();
               const viewportTop = $(window).scrollTop();
               const viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('active');
            }
        });
    }
    
    // Typing animation for hero section
    const titleElement = $('.hero h1');
    const originalTitle = titleElement.text();
    
    if (titleElement.length && !sessionStorage.getItem('animation-played')) {
        titleElement.text('');
        let i = 0;
        const typeWriter = () => {
            if (i < originalTitle.length) {
                titleElement.text(titleElement.text() + originalTitle.charAt(i));
                i++;
                setTimeout(typeWriter, 100);
            } else {
                sessionStorage.setItem('animation-played', 'true');
            }
        };
        setTimeout(typeWriter, 500);
    }
    
    // Skill bars animation
    $('.skills-section').waypoint({
        handler: function(direction) {
            $('.skills .progress-bar').each(function() {
                const progressValue = $(this).attr('aria-valuenow');
                $(this).css('width', progressValue + '%');
            });
            this.destroy();
        },
        offset: '80%'
    });
    
    // Skills hover effect
    $('.skill-card').hover(
        function() {
            $(this).addClass('shadow-lg transform -translate-y-1');
        },
        function() {
            $(this).removeClass('shadow-lg transform -translate-y-1');
        }
    );
    
    // Add fade effect to timeline items when scrolled into view
    $(window).on('scroll', function() {
        $('.timeline-item').each(function() {
            if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
                $(this).addClass('opacity-100').removeClass('opacity-0');
            }
        });
    });
    
    // Initialize tooltips
    $('[data-toggle="tooltip"]').tooltip();
    
    // Mobile navigation toggle
    $('.navbar-toggler').on('click', function() {
        $('#main-navbar').toggleClass('show');
    });
    
    // Print CV button
    $('#print-cv').on('click', function(e) {
        e.preventDefault();
        window.print();
    });
    
    // Keyboard navigation
    $(document).keydown(function(e) {
        // Navigate sections with arrow keys
        if (e.key === 'ArrowDown') {
            let nextSection = getNextSection();
            if (nextSection) {
                $('html, body').animate({
                    scrollTop: $(nextSection).offset().top - 70
                }, 800);
            }
        } else if (e.key === 'ArrowUp') {
            let prevSection = getPreviousSection();
            if (prevSection) {
                $('html, body').animate({
                    scrollTop: $(prevSection).offset().top - 70
                }, 800);
            }
        }
    });
    
    // Get next visible section
    function getNextSection() {
        const sections = ['#about', '#experience', '#skills', '#education', '#projects'];
        const scrollPosition = $(window).scrollTop();
        
        for (let i = 0; i < sections.length; i++) {
            const sectionTop = $(sections[i]).offset().top;
            
            if (sectionTop > scrollPosition + 100) {
                return sections[i];
            }
        }
        
        return null;
    }
    
    // Get previous visible section
    function getPreviousSection() {
        const sections = ['#about', '#experience', '#skills', '#education', '#projects'];
        const scrollPosition = $(window).scrollTop();
        let prev = null;
        
        for (let i = 0; i < sections.length; i++) {
            const sectionTop = $(sections[i]).offset().top;
            
            if (sectionTop >= scrollPosition - 100) {
                return prev;
            }
            
            prev = sections[i];
        }
        
        return null;
    }
});