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
                    <div class="dropdown-option-topik" tabindex="-1" onclick="selectOption('{{$topik['name']}}')">{{$topik['name']}}</div>
                @endforeach
                <!-- Add more options as needed -->
            </div>
        </div>
        <div class="posts-edit">
            <form action="" class="w-100">
                <input type="text" placeholder="Title" class="form-control w-100 mb-3">
                <div class="border-bottom py-4 editor">
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content" class="editor"></trix-editor>
                </div>
                <div class="d-flex w-100 flex-row-reverse">
                    <button type="submit" class="btn btn-primary mt-3">Submit Post</button>
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
</script>
