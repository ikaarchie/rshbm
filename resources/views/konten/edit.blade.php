<div class="modal fade" id="edit{{$isi->id}}" tabindex="-1" data-bs-backdrop="static" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Ubah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::model($isi, [ 'method' => 'patch','route' => ['update', $isi->id], 'enctype' =>
                'multipart/form-data' ]) !!}

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <div class="col-sm-4 mb-3 form-floating">
                        {!! Form::select('jenis', [
                        'Gizi' => 'Gizi',
                        'Informasi lainnya' => 'Informasi lainnya',
                        'Penyakit' => 'Penyakit',
                        'Tindakan dan Alat' => 'Tindakan dan Alat'], $isi->jenis, ['style' => 'height: auto', 'class' =>
                        'form-select', 'id' =>
                        'jenis','placeholder' => '-- Pilih jenis --', 'required']) !!}
                        {!! Form::label('jenis', 'Jenis') !!}
                    </div>

                    <div class="col-sm-8 mb-3 form-floating">
                        {!! Form::text('judul', $isi->judul, ['style' => 'height: auto', 'class' => 'form-control', 'id'
                        =>
                        'judul', 'placeholder' => 'Judul', 'required']) !!}
                        {!! Form::label('judul', 'Judul') !!}
                    </div>
                </div>

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <div class="col-sm-12 mb-3 form-floating">
                        {!! Form::text('deskripsi', $isi->deskripsi, ['style' => 'height: auto', 'class' =>
                        'form-control',
                        'id' =>
                        'deskripsi', 'placeholder' => 'Deskripsi', 'required']) !!}
                        {!! Form::label('deskripsi', 'Deskripsi') !!}
                    </div>
                </div>

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <div class="col-sm-12 mb-3 form-floating">
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                        <label for="gambar">Gambar</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"><i
                        class="fa-solid fa-xmark"></i> Batal</button>
                {{Form::button('<i class="fa-solid fa-check"></i> Ubah Data', ['class' => 'btn btn-sm
                btn-success',
                'type' => 'submit'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>