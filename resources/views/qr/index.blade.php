@extends('layout.base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    Generate QR
                </div>
                <div class="card-body">
                    <form action="{{ url('generate-qr') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="link" class="form-control">
                        </div>
                        <button class="btn btn-block btn-dark"> Generate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
