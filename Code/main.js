function validateEmail() {
    var emailInput = document.getElementById('email');
    var emailError = document.getElementById('emailError');
    var allowedDomains = ['student.zadkine.nl', 'tcr.mbo.nl'];

    var email = emailInput.value.trim().toLowerCase();
    var domain = email.split('@')[1];

    if (allowedDomains.indexOf(domain) === -1) {
        emailError.innerHTML = 'Gebruik een geldig emailadres met het domein @student.zadkine.nl of @tcr.mbo.nl.';
        return false;
    } else {
        emailError.innerHTML = '';
        return true;

    }
}
