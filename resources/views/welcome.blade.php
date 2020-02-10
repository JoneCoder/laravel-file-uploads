<!DOCTYPE html>
<html lang="en" >
<head>
    <title>Laravel-file-Upload CSS Animation UI</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="upload">
    <div class="upload-files">
        <header>
            <p>
                <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                <span class="up">up</span>
                <span class="load">load</span>
            </p>
        </header>
        <div class="body" id="drop">
            <i class="fa fa-file-text-o pointer-none" aria-hidden="true"></i>
            <p class="pointer-none"><b>Drag and drop</b> files here <br /> or <a href="" id="triggerFile">browse</a> to begin the upload</p>
            <input type="file" multiple="multiple" />
        </div>
        <footer>
            <div class="divider">
                <span><AR>FILES</AR></span>
            </div>
            <div class="list-files">
                <!--   template   -->
            </div>
            <button class="importar">MORE UPLOADS</button>
        </footer>
    </div>
</div>
<!-- partial -->
<script  src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>
