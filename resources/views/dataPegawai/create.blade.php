@extends('layout.base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">
                    Create Data Pegawai
                </div>
                <div class="card-body">
                    <form action="{{ url('data-pegawai') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="control-label">Nama Pegawai</label>
                            @error('nama_pegawai')
                                <span class="text-red">
                                    {{ $message }}
                                </span>
                            @enderror
                            <input type="text"
                                class="form-control @error('nama_pegawai')
                                is-invalid
                            @enderror"
                                name="nama_pegawai">
                        </div>
                        <div class="mb-3">
                            <label for="" class="control-label">Divisi Pegawai</label>
                            @error('divisi_pegawai')
                                <span class="text-red">
                                    {{ $message }}
                                </span>
                            @enderror
                            <input type="text"
                                class="form-control @error('divisi_pegawai')
                                is-invalid
                            @enderror"
                                name="divisi_pegawai">
                        </div>
                        <div class="mb-3">
                            <label for="" class="control-label">Jenis Kelamin</label>
                            @error('jenis_kelamin')
                                <span class="text-red">
                                    {{ $message }}
                                </span>
                            @enderror
                            <select name="jenis_kelamin" id=""
                                class="form-control @error('jenis_kelamin')
                                is-invalid
                            @enderror">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="control-label">Password</label>
                            @error('password')
                                <span class="text-red">
                                    {{ $message }}
                                </span>
                            @enderror
                            <input type="password"
                                class="form-control @error('password')
                                is-invalid
                            @enderror"
                                name="password">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-block btn-dark"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
