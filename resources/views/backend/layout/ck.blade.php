<script type="text/javascript">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

        CKEDITOR.replace( 'aciklama{{$localeCode}}', {
        filebrowserUploadUrl: "{{ route('page.postUpload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form',
        allowedContent: true,
        height : 300,
            toolbar: [
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold']},
                { name: 'paragraph', items: [ 'BulletedList', 'NumberedList', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']}, // Hizalama düğmeleri eklenmiş
                { name: 'colors', items: [ 'TextColor' ]},
                { name: 'styles', items: [ 'Format', 'FontSize']},
                { name: 'links', items : [ 'Link', 'Unlink'] },
                { name: 'insert', items : [ 'Image', 'Table']},
                { name: 'document', items : [ 'Source','Maximize' ]},
                { name: 'clipboard', items : [ 'PasteText', 'PasteFromWord' ]},
            ],
        });

        CKEDITOR.replace( 'short{{$localeCode}}', {
        filebrowserUploadUrl: "{{ route('page.postUpload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form',
        allowedContent: true,
        height : 300,
            toolbar: [
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold']},
                { name: 'paragraph', items: [ 'BulletedList', 'NumberedList', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']}, // Hizalama düğmeleri eklenmiş
                { name: 'colors', items: [ 'TextColor' ]},
                { name: 'styles', items: [ 'Format', 'FontSize']},
                { name: 'links', items : [ 'Link', 'Unlink'] },
                { name: 'insert', items : [ 'Image', 'Table']},
                { name: 'document', items : [ 'Source','Maximize' ]},
                { name: 'clipboard', items : [ 'PasteText', 'PasteFromWord' ]},
            ],
        });

    @endforeach
</script>
