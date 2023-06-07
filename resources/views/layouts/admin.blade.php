<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORDISMA | {{ $current }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://kit.fontawesome.com/276811e295.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    @include('layouts.components.navbar')


    <div class="container-xxl align-self-stretch main-content">
        <div class="row">
            @include('layouts.components.adminSidebar')
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reportModalLabel">Buat Topik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your report form goes here -->
                    <form id="reportForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Topik</label>
                            <input class="form-control" name="name" id="name" type="text"</input>
                        </div>
                        <div class="mb-3">
                            <label for="context" class="form-label">Deskripsi singkat</label>
                            <textarea class="form-control" name="context" id="context" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="submitReport">Buat</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Konfirmasi penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus??
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" id="confirmButton" class="btn btn-danger" onclick="deleteGrandparent()">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
    <div id="successMessage" class="alert alert-success alert-dismissible" role="alert">
        <div>{{ session('message') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        var navigationSL = document.getElementsByClassName("sl-items");
        for (var i = 0; i < navigationSL.length; i++) {
            navigationSL[i].addEventListener("click", function() {
                var link = this.getAttribute("data-link");
                window.location.href = link;
            });
        }

        function toggleLike(button, event) {
            event.stopPropagation();
            var likeButton = button;
            var dislikeButton = button.nextElementSibling.nextElementSibling;
            var likeCount = button.nextElementSibling;
            var currentCount = parseInt(likeCount.textContent);
            var liked = button.dataset.liked === 'true';
            var disliked = dislikeButton.dataset.disliked === 'true';

            var heartIcon = button.querySelector('i');

            if (liked) {

                likeCount.textContent = currentCount - 1;
                button.dataset.liked = 'false';
                heartIcon.classList.remove('fas'); // Remove solid heart class
                heartIcon.classList.add('far'); // Add regular heart class
            } else {
                likeCount.textContent = currentCount + 1;
                button.dataset.liked = 'true';
                dislikeButton.dataset.disliked = 'false';
                heartIcon.classList.remove('far'); // Remove regular heart class
                heartIcon.classList.add('fas'); // Add solid heart class

                // Reset the dislike button
                var dislikeIcon = dislikeButton.querySelector('i');
                dislikeIcon.classList.remove('fas'); // Remove solid thumbs-down class
                dislikeIcon.classList.add('far'); // Add regular thumbs-down class
            }
        }

        function toggleDislike(button, event) {
            event.stopPropagation();
            var dislikeButton = button;
            var likeButton = button.previousElementSibling.previousElementSibling;
            var likeCount = button.previousElementSibling;
            var currentCount = parseInt(likeCount.textContent);
            var disliked = button.dataset.disliked === 'true';
            var liked = likeButton.dataset.liked === 'true';

            var thumbsDownIcon = button.querySelector('i');

            if (disliked) {

                likeCount.textContent = currentCount + 1;
                button.dataset.disliked = 'false';
                thumbsDownIcon.classList.remove('fas'); // Remove solid thumbs-down class
                thumbsDownIcon.classList.add('far'); // Add regular thumbs-down class

            } else {

                likeCount.textContent = currentCount - 1;
                button.dataset.disliked = 'true';
                likeButton.dataset.liked = 'false';
                thumbsDownIcon.classList.remove('far'); // Remove regular thumbs-down class
                thumbsDownIcon.classList.add('fas'); // Add solid thumbs-down class

                // Reset the like button
                var heartIcon = likeButton.querySelector('i');
                heartIcon.classList.remove('fas'); // Remove solid heart class
                heartIcon.classList.add('far'); // Add regular heart class
                // ... Update the UI if necessary
            }
        }

        var reportButtons = document.querySelectorAll('.report-btn');
        reportButtons.forEach(function(button, index) {
            button.addEventListener('click', function(event) {
                event.stopPropagation();
                console.log("A")
            });
        });

        const appendAlert = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div id="successMessage" class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('')

            document.body.append(wrapper)
        }

        document.getElementById('submitReport').addEventListener('click', function() {
            // Handle the report form submission here
            console.log("AAAAAA")
            // Example: Show a success message
            appendAlert('Report submitted successfully!', 'success')

            // Reset the form
            document.getElementById('reportForm').reset();
        });

        var confirmButton;
        var grandparentToDelete;
        var myModal;

        function confirmDeleteA(button) {
            grandparentToDelete = button.parentNode.parentNode;
            confirmButton = document.getElementById('confirmButton');
            confirmButton.addEventListener('click', deleteGrandparent);

            var modalElement = document.getElementById('confirmModal');
            myModal = new bootstrap.Modal(modalElement);
            myModal.show();
        }

        function confirmDelete(button, link) {
            confirmButton = document.getElementById('confirmButton');
            confirmButton.addEventListener('click', function() {
                window.location.href = link
            });

            var modalElement = document.getElementById('confirmModal');
            myModal = new bootstrap.Modal(modalElement);
            myModal.show();
        }

        function deleteGrandparent() {
            grandparentToDelete.parentNode.removeChild(grandparentToDelete);
            appendAlert('Penghapusan berhasil', 'success')
            hideModal();
        }

        function deleteGrandparent2(button, message) {
            button.parentNode.parentNode.parentNode.remove();
            appendAlert(message, 'success')
        }

        function hideModal() {
            myModal.hide();

            confirmButton.removeEventListener('click', deleteGrandparent);
        }

        function toggleFollow(button, event) {
            event.stopPropagation();
            if (button.style.color === 'gold') {
                button.style.color = 'white';
            } else {
                button.style.color = 'gold';
            }
        }
    </script>
</body>




</html>