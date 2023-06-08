@extends('layouts.main')

@section('content')
    <div class="main-container">
        <div class="pilih-topik dropdown-topik">
            <div class="dropdown-toggle-topik create-post-btn topik-dropdown" onclick="toggleDropdown()">
                <span id="pilihanTopik">Pilih Topik</span>
                <i class="fa fa-chevron-down ms-auto" aria-hidden="true"></i>

            </div>
            <div class="dropdown-menu-topik">
                @foreach ($topiks as $topik)
                    <div class="dropdown-option-topik" tabindex="-1" onclick="selectOption(`{{ $topik['name'] }}`)">
                        {{ $topik['name'] }}</div>
                @endforeach
                <!-- Add more options as needed -->
            </div>
        </div>
        <div class="posts-edit">
            <form action="/create/" class="w-100" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Title" class="form-control w-100 mb-3">
                <div class="border-bottom py-4 editor">
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content" class="editor"></trix-editor>
                </div>
                <div class="d-flex w-100 flex-row-reverse">
                    <a href="/home" class="btn btn-primary mt-3">Submit Post</a>
                    {{-- <button type="submit" class="btn btn-primary mt-3">Submit Post</button> --}}
                </div>
            </form>
        </div>
    </div>
@stop

@section('rbar')

@endsection

<script>
    function toggleDropdown() {
        var dropdownMenu = document.querySelector('.dropdown-menu-topik');
        dropdownMenu.style.display = dropdownMenu.style.display === 'none' ? 'block' : 'none';
    }

    function selectOption(option) {
        var dropdownToggle = document.querySelector('#pilihanTopik');
        dropdownToggle.textContent = option;
        toggleDropdown();
        // Perform additional actions based on the selected option
    }

    (function() {
        var HOST = "https://api.cloudinary.com/v1_1/dvebmzcyq/image/upload"

        addEventListener("trix-attachment-add", function(event) {
            if (event.attachment.file) {
                uploadFileAttachment(event.attachment)
            }
        })

        function uploadFileAttachment(attachment) {
            uploadFile(attachment.file, setProgress, setAttributes)

            function setProgress(progress) {
                attachment.setUploadProgress(progress)
            }

            function setAttributes(attributes) {
                attachment.setAttributes(attributes)
                console.log(attachment)

            }
        }

        function uploadFile(file, progressCallback, successCallback) {
            var key = createStorageKey(file)
            var formData = createFormData(key, file)
            var xhr = new XMLHttpRequest()

            xhr.open("POST", HOST, true)

            xhr.upload.addEventListener("progress", function(event) {
                var progress = event.loaded / event.total * 100
                progressCallback(progress)
            })

            xhr.addEventListener("load", function(event) {
                if (xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    var attributes = {
                        url: response.secure_url,
                        href: response.secure_url
                    }
                    successCallback(attributes)
                }
            })
            xhr.send(formData)
        }

        function createStorageKey(file) {
            var date = new Date()
            var day = date.toISOString().slice(0, 10)
            var name = date.getTime() + "-" + file.name
            return ["tmp", day, name].join("/")
        }

        function createFormData(key, file) {
            var data = new FormData()
            data.append("key", key)
            data.append("Content-Type", file.type)
            //data.append("file", file)
            data.append('upload_preset', "qashpglh")
            return data
        }
    })();
</script>
