const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
const passwordConfirmation = document.getElementById('password_confirmation');
const togglePassword = document.getElementById('togglePassword');
const password = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        // Toggle type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Toggle icon
        this.innerHTML = type === 'password' ? '<i class="ri-eye-fill" aria-hidden="true"></i>' : '<i class="ri-eye-off-fill" aria-hidden="true"></i>';
    });

    toggleConfirmPassword.addEventListener('click', function() {
        // Toggle type attribute
        const type = passwordConfirmation.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordConfirmation.setAttribute('type', type);

        // Toggle icon
        this.innerHTML = type === 'password' ?  '<i class="ri-eye-fill" aria-hidden="true"></i>' : '<i class="ri-eye-off-fill" aria-hidden="true"></i>';
    });