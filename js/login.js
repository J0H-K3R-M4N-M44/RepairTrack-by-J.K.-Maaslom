document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('login-form');
    const submitBtn = document.getElementById('login-submit-btn');

    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            const inputs = loginForm.querySelectorAll('input[required]');
            let hasEmpty = false;

            inputs.forEach(input => {
                if (input.value.trim() === '') {
                    hasEmpty = true;
                }
            });

            if (hasEmpty) {
                e.preventDefault();
                return;
            }

            // Disable button to prevent double submission
            submitBtn.disabled = true;
            submitBtn.textContent = 'Logging in...';
        });
    }
});