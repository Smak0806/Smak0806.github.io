$(document).ready(function() {
     // Skill tabs handling
     $('.skill-tab').click(function() {
         const target = $(this).data('target');
         
         // Update active tab
         $('.skill-tab').removeClass('active');
         $(this).addClass('active');
         
         // Show corresponding content
         $('.skill-content').addClass('hidden');
         $(`#${target}-content`).removeClass('hidden');
     });
     
     // Back to top button
     const backToTopBtn = $('#backToTop');
     
     $(window).scroll(function() {
         if ($(this).scrollTop() > 300) {
             backToTopBtn.removeClass('opacity-0 invisible').addClass('opacity-100 visible');
         } else {
             backToTopBtn.removeClass('opacity-100 visible').addClass('opacity-0 invisible');
         }
     });
     
     backToTopBtn.click(function() {
         $('html, body').animate({scrollTop: 0}, 800);
         return false;
     });
     
     // Smooth scrolling for navigation links
     $('a[href^="#"]').on('click', function(e) {
         const target = $(this.getAttribute('href'));
         
         if (target.length) {
             e.preventDefault();
             $('html, body').animate({
                 scrollTop: target.offset().top - 80 // Offset for fixed navbar
             }, 800);
         }
     });
     
     // Download CV button
     $('#downloadCV').click(function() {
         // Get current language
         const currentLang = $('html').attr('lang') || 'es';
         
         // Call the PHP function to generate PDF via AJAX
         $.ajax({
             url: 'generate-pdf.php',
             method: 'POST',
             data: {
                 lang: currentLang
             },
             success: function(response) {
                 const data = JSON.parse(response);
                 if (data.success) {
                     // Create a link element to trigger download
                     const link = document.createElement('a');
                     link.href = data.file;
                     link.download = data.filename;
                     document.body.appendChild(link);
                     link.click();
                     document.body.removeChild(link);
                 } else {
                     alert('Error generating CV. Please try again later.');
                 }
             },
             error: function() {
                 alert('Error connecting to server. Please try again later.');
             }
         });
     });
     
     // Set social media URLs from config
     $('#linkedinBtn, .footer a:nth-child(1)').attr('href', linkedinUrl);
     $('#githubBtn, .footer a:nth-child(2)').attr('href', githubUrl);
     
     // Add animation effects for elements when scrolling into view
     const animateOnScroll = function() {
         const windowHeight = $(window).height();
         const scrollTop = $(window).scrollTop();
         
         $('.about-card, .skill-item, .timeline-item, .card').each(function() {
             const elementTop = $(this).offset().top;
             
             if (elementTop < (scrollTop + windowHeight - 100)) {
                 $(this).addClass('animate__animated animate__fadeInUp');
             }
         });
     };
     
     // Run animation on load
     animateOnScroll();
     
     // Run animation on scroll
     $(window).scroll(function() {
         animateOnScroll();
     });
 });