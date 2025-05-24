document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const requiredFields = ['name', 'email', 'location', 'description'];

  form.addEventListener('submit', (event) => {
    let isValid = true;
    clearErrors();

    requiredFields.forEach((fieldName) => {
      const field = form.elements[fieldName];
      const value = field.value.trim();

      if (!value) {
        showError(field, 'This field is required.');
        isValid = false;
      }

      if (fieldName === 'email' && !validateEmail(value)) {
        showError(field, 'Please enter a valid email address.');
        isValid = false;
      }
    });

    if (!isValid) {
      event.preventDefault(); // Prevent form from submitting
    }
  });

  function showError(input, message) {
    input.classList.add('error');
    const errorMsg = document.createElement('div');
    errorMsg.className = 'error-msg';
    errorMsg.textContent = message;
    input.insertAdjacentElement('afterend', errorMsg);
  }

  function clearErrors() {
    document.querySelectorAll('.error').forEach(el => el.classList.remove('error'));
    document.querySelectorAll('.error-msg').forEach(el => el.remove());
  }

  function validateEmail(email) {
    // Simple regex for validating email
    return /^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email);
  }
});
