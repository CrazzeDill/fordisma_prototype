<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORDISMA | {{ $current}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://kit.fontawesome.com/276811e295.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="d-flex justify-content-center align-items-stretch min-vh-100" style="background: white;">
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex mb-3 justify-content-center">
                <img src="/logos/messages.svg" alt="" width="70">
                <span class="fw-bold fs-1">FORDISMA</span>
            </div>
            <div class="d-flex mt-3 flex-column">
                @yield('content')

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>
        // function togglePasswordVisibility() {
        //     var passwordInput = document.getElementById("pass");
        //     var passwordIcon = document.getElementById("password-icon");

        //     if (passwordInput.type === "password") {
        //         passwordInput.type = "text";
        //         passwordIcon.classList.remove("fa-eye");
        //         passwordIcon.classList.add("fa-eye-slash");
        //     } else {
        //         passwordInput.type = "password";
        //         passwordIcon.classList.remove("fa-eye-slash");
        //         passwordIcon.classList.add("fa-eye");
        //     }
        // }
        var passwordInput = document.getElementById('pass');
        var passwordConfirmationInput = document.getElementById('pass_confirmation');
        var passwordIcon = document.getElementById('pass-icon');
        var passwordConfirmationIcon = document.getElementById('pass_confirmation-icon');
        var togglePasswordButtons = document.getElementsByClassName('toggle-password');

        for (var i = 0; i < togglePasswordButtons.length; i++) {
            togglePasswordButtons[i].addEventListener('click', function() {
                var targetId = this.getAttribute('data-target');
                togglePasswordVisibility(targetId);
            });
        }

        function togglePasswordVisibility(targetId) {
            var targetInput = document.getElementById(targetId);
            var targetIcon = document.getElementById(targetId + '-icon');

            if (targetInput.type === 'password') {
                targetInput.type = 'text';
                targetIcon.classList.remove('fa-eye');
                targetIcon.classList.add('fa-eye-slash');
            } else {
                targetInput.type = 'password';
                targetIcon.classList.remove('fa-eye-slash');
                targetIcon.classList.add('fa-eye');
            }
        }
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
        var form = document.getElementById('formRegister');
        var errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            errorMessage.textContent = '';

            if (passwordInput.value !== passwordConfirmationInput.value) {
                errorMessage.textContent = 'Passwords do not match';
                return;
            }

            // Passwords match, continue with form submission
            form.submit();
        });
    </script>
</body>




</html>