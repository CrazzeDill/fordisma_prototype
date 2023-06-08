@extends('layouts.main')

@section('content')
    <div class="main-container">
        <div class="posts-edit">
            <div class=" fw-bold text-center w-100 border-bottom pb-3">
                <i class="fa fa-gears" aria-hidden="true"></i> Pengaturan akun
            </div>
            <div class="w-100">
                <div class="mb-3 ">
                    <h6 class="fw-bold">Alamat email</h6>
                    <div class="d-flex justify-content-between">
                        <p class="text-secondary">USERNAME@gmail.com</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changeEmailModal">
                            Ubah
                        </button>
                    </div>
                </div>
                <div class="mb-3 ">
                    <h6 class="fw-bold">Ubah Password</h6>
                    <div class="d-flex justify-content-between">
                        <p class="text-secondary">Password harus paling sedikit 8 karakter !</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                            Ubah
                        </button>
                    </div>
                </div>
                <form action="">
                    <div class="mb-3">
                        <label for="context" class="form-label">Username</label>
                        <input type="text" value="USERNAME" class="form-control" name="context"></input>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsisingkat" class="form-label">Deskripsi singkat</label>
                        <textarea class="form-control" name="context" id="deskripsisingkat" rows="3"></textarea>
                    </div>

                    <div class="d-flex flex-row-reverse">
                        <button class="btn btn-primary">
                            Simpan
                        </button>

                    </div>
                </form>
                <div class="mb-3">
                    <h6 class="fw-bold">Foto Profil</h6>
                    <div class="d-flex flex-column align-items-center">
                        <img class="rounded-circle" src="https://github.com/CrazzeDill.png" alt="CrazzeDill" width="300"
                            style="background-color: gray">
                        <div class="mt-3">

                            <button type="button" class="btn btn-primary" id="fileUploadButton">
                                Ubah
                            </button>
                            <input type="file" id="fileInput" style="display: none;">
                        </div>
                    </div>



                </div>
                <div class="mb-3 ">
                    <h6 class="fw-bold border-bottom">Hapus akun</h6>
                    <div class="d-flex justify-content-between">
                        {{-- <button class="btn btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i> Hapus Akun
                        </button> --}}
                        <button type="button" class="btn btn-danger " onclick="confirmDelete(this, `/login`)">
                            <i class="fa fa-trash" aria-hidden="true"></i> Hapus Akun
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="changePasswordForm">
                    <div class="form-group">
                        <label for="preverpa">Password Lama</label>
                        <input type="password" class="form-control" id="preverpa" required>
                    </div>
                    <div class="form-group">
                        <label for="newPassword">Password Baru</label>
                        <input type="password" class="form-control" id="newPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">konfirmasi Password</label>
                        <input type="password" class="form-control" id="confirmPassword" required>
                    </div>
                    <div id="passwordValidationError" style="display: none; color: red;">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Change</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="changeEmailModal" tabindex="-1" aria-labelledby="changeEmailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeEmailModalLabel">Ubah Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="changeEmailForm">
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="newEmailInput" class="form-label">Email Baru</label>
                        <input type="email" class="form-control" id="newEmailInput" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var changePasswordForm = document.getElementById('changePasswordForm');
        var passwordValidationError = document.getElementById('passwordValidationError');

        changePasswordForm.addEventListener('submit', function(event) {
            event.preventDefault();

            var newPassword = document.getElementById('newPassword').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            if (newPassword.length < 8 || confirmPassword.length < 8) {
                passwordValidationError.style.display = 'block';
                passwordValidationError.textContent = 'Passwords must be minimal 8 characters long.';
                return;
            }

            if (newPassword !== confirmPassword) {
                passwordValidationError.style.display = 'block';
                passwordValidationError.textContent = 'Passwords do not match.';
                return;
            }
            // Perform password change logic here
            // You can make an Ajax request to your server to handle the password change

            // Close the modal
            var modal = bootstrap.Modal.getInstance(document.getElementById('changePasswordModal'));
            modal.hide();

            // Reset the form
            changePasswordForm.reset();
            passwordValidationError.style.display = 'none';
        });
        document.getElementById('fileUploadButton').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function() {
            var selectedFile = this.files[0];

            // Perform actions with the selected file, such as uploading, processing, etc.
            // You can access the file using the 'selectedFile' variable

            // Example: Log the selected file name
            console.log('Selected File:', selectedFile.name);
        });
    });
</script>
