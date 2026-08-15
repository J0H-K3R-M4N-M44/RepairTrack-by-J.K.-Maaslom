// Prevent double submit / empty submit on track form
document.addEventListener('DOMContentLoaded', () => {
    const trackForm = document.getElementById('track-form');
    const submitBtn = document.getElementById('track-submit-btn');
    const trackingInput = document.getElementById('tracking_id');
    const errorMsg = document.getElementById('track-error');

    if (trackForm) {
        trackForm.addEventListener('submit', (e) => {
            const value = trackingInput.value.trim();
            const validFormat = /^[A-Fa-f0-9]{5}$/.test(value);

            if (!validFormat) {
                e.preventDefault();
                if (errorMsg) {
                    errorMsg.style.display = 'block';
                }
                return;
            }

            if (errorMsg) {
                errorMsg.style.display = 'none';
            }

            // Disable button to prevent double submission
            submitBtn.disabled = true;
            submitBtn.textContent = 'Searching...';
        });

        // Auto-uppercase as user types
        trackingInput.addEventListener('input', () => {
            trackingInput.value = trackingInput.value.toUpperCase();
        });
    }
});