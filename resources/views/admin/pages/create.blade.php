@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Gast toevoegen</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ url('/dashboard/guests') }}">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="first_name" value="{{ old('first_name') }}">
                            </div>

                            <div class="form-group">
                                <label>Body</label>
                                <textarea class="form-control tinymce-editor"></textarea>

                            </div>

                            <div class="form-group">
                                <label>Logged in page?</label>
                                <input class="form-check" type="checkbox" name="is_logged_in">
                            </div>

                            <div class="form-group">
                                <label>Page for special guest?</label>
                                <input class="form-check" type="checkbox" name="is_special_guest">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Opslaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script type="text/javascript">

        tinymce.init({

            selector: 'textarea.tinymce-editor',

            height: 100,

            menubar: false,

            plugins: [

                'advlist autolink lists link image charmap print preview anchor',

                'searchreplace visualblocks code fullscreen',

                'insertdatetime media table paste code help wordcount'

            ],

            toolbar: 'undo redo | formatselect | ' +

                'bold italic backcolor | alignleft aligncenter ' +

                'alignright alignjustify | bullist numlist outdent indent | ' +

                'removeformat | help',

            content_css: '//www.tiny.cloud/css/codepen.min.css'

        });

    </script>
@endpush

