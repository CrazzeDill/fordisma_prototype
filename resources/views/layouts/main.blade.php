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
            @include('layouts.components.sidebar')
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col sidebar-right">
                @yield('rbar')
            </div>
        </div>
    </div>

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
    </script>
</body>




</html>