document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            const email = this.email.value;
            const nev = this.nev.value;

            let errors = [];
            if (!nev.trim()) errors.push("A név megadása kötelező.");
            if (!email.includes('@')) errors.push("Érvénytelen email cím.");

            if (errors.length > 0) {
                alert(errors.join('\n'));
                e.preventDefault();
            }
        });
    }
});
