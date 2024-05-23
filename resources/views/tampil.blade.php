
<!-- <center>
    <img src="{{ URL::to('/') }}/storage/path_ke_folder/MKODD3IAk4oVnV4yZkM2YAZEUQeNu28gsCxwYHBZ.jpg" width="250" height="250">
</center> -->

@foreach ( $gambar as $gambardb )
    <img src="{{ URL::to('/') }}/storage/path_ke_folder/{{ $gambardb->nama_gambar }}" width="100" height="100">
@endforeach