<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Auto Save</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <form id="autoSaveForm">
        <input type="text" name="title" id="title" placeholder="Masukkan Judul..." required>
        <input type="text" name="content" id="content" placeholder="Masukkan Konten..." required>
    </form>

    <script>
        $(document).ready(function() {
            $('#autoSaveForm').on('keypress', function(e) {
                if (e.which === 13) { // Jika tombol Enter ditekan
                    e.preventDefault(); // Mencegah submit form default
                    savePost(); // Jalankan fungsi simpan data
                }
            });

            function savePost() {
                let title = $('#title').val();
                let content = $('#content').val();

                $.ajax({
                    url: "{{ route('posts.store') }}",
                    type: "POST",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        title: title,
                        content: content
                    },
                    success: function(response) {
                        alert("Data berhasil disimpan!");
                        $('#title').val('');
                        $('#content').val('');
                    },
                    error: function(xhr) {
                        alert("Terjadi kesalahan: " + xhr.responseText);
                    }
                });
            }
        });
    </script>

</body>
</html>
