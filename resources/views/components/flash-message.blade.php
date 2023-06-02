@if(session()->has('message'))
    <script>
        Swal.fire(
        'Done!',
        '{{ session('message') }}',
        'success'
        )
    </script>
@endif