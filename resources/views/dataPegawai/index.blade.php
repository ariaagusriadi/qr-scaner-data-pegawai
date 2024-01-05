@extends('layout.base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    Data Pegawai <a href="{{ url('data-pegawai/create') }}" class="btn btn-dark float-right"><i
                            class="fa fa-plus"></i>
                        Add Pegawai</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td><button type="button" class="btn btn-dark" data-toggle="modal"
                                            data-target="#staticBackdrop">
                                            Generate Link
                                        </button></td>
                                </tr>
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input id="linkBox" type="text" class="form-control"
                                                    value="http://127.0.0.1:8000/data-pegawai/{{ $item->id }}" readonly>
                                                <button class="mt-2 btn btn-outline-secondary"
                                                    onclick="copyLink()">Salin</button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    function copyLink() {
        /* Get the text field */
        var linkBox = document.getElementById("linkBox");

        /* Select the text field */
        linkBox.select();
        linkBox.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Link telah disalin");
    }
</script>
