@extends('layouts.konten')

@section('konten')

<div class="container justify-content-center pt-5 bg-white">
    <div class="d-md-flex justify-content-between">
        <div class="gap-1 d-md-flex justify-content-md-start mt-2">
            <button type="button" data-bs-toggle="modal" data-bs-target="#tambah" class="btn"
                style="background-color: #FFAB00;">
                <i class="fa-solid fa-plus"></i><b> Tambah Data</b>
            </button>
        </div>

        <div class="gap-1 d-md-flex justify-content-md-end mt-2">
            <div class="form-group w-10">
                <div class="input-group">
                    <input type="text" class="form-control" style="outline: 0.5px solid; outline-color: #FFAB00;"
                        id="myInput" onkeyup="cari()" placeholder="Cari Judul">
                    <span class="input-group-text"
                        style="outline: 0.5px solid; outline-color: #FFAB00; background-color: #FFAB00;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive mt-1 table-data tbl-fixed">
        <table class="table table-bordered border-dark align-middle w-100" id="myTable">
            <thead class="sticky text-dark text-center align-middle">
                <tr>
                    <th style="width:1%">No</th>
                    <th style="width:15%">Jenis</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th style="width:1%">Gambar</th>
                    <th style="width:15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @forelse($konten as $key => $isi)
                <tr>
                    <td>{{ $konten->firstItem() + $key }}</td>
                    <td>{{ $isi->jenis }}</td>
                    <td>{{ $isi->judul }}</td>
                    <td>{{ $isi->deskripsi }}</td>
                    <td class="text-center">
                        <a href="{{ asset('gambar-konten/'.$isi->gambar) }}" data-lightbox="{{ $isi->jenis }}"
                            data-title="{{ $isi->judul }}" class="btn btn-sm btn-primary">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="#edit{{ $isi->id }}" data-bs-toggle="modal" class="btn btn-sm btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-danger deleteSwal" data-id="{{ $isi->id }}"
                                data-nama="{{ $isi->judul }}"><i class="fa-solid fa-trash"></i> Delete</a>
                            @include('konten.edit')
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="21" class="text-center"><b>Tidak ada data</b></td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="btn-toolbar justify-content-between">
            <div>
                Menampilkan
                {{ $konten->firstItem() }} - {{ $konten->lastItem() }}
                dari
                {{ $konten->total() }}
                data
            </div>
            <div>
                {{ $konten->links() }}
            </div>
        </div>
    </div>
</div>
@include('konten.add')

{{-- fungsi search --}}
<script>
    function cari() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
</script>

{{-- fungsi sweet alert --}}
<script>
    $('.deleteSwal').click(function(){  
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success me-md-2',
                cancelButton: 'btn btn-danger me-md-2'
            },
            buttonsStyling: false
        })
        
        swalWithBootstrapButtons.fire({
            title: "Yakin?",
            text: "Data "+nama+" akan dihapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "konten/delete/"+id+""
                swalWithBootstrapButtons.fire(
                    'Terhapus!',
                    'Data berhasil dihapus',
                    'success'
                )
            } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Dibatalkan!',
                    'Data batal dihapus',
                    'error'
                    )
            }
        })
    })
</script>

{{-- fungsi toastr --}}
<script>
    // toastr.success('Have fun storming the castle!', 'Miracle Max Says')
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>

@endsection