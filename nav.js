
   
    const navLinks = document.querySelectorAll('nav a');

    navLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();  

            const targetId = link.getAttribute('href').substring(1);

            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                targetSection.scrollIntoView ({
                    behavior: 'auto'
                });
            }
        });
    });
