@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <input type="file" name="photos[]" multiple id="photos">
            </div>

            <div class="row" id="photo-preview">

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#photos').on('change', function (e) {
                var files = e.target.files;

                if(files.length < 1) return;

                var photoPreviewContainer = $('#photo-preview');

                



            });
        });
    </script>
@endsection