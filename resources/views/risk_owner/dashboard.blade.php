@extends('layouts.dashboard-volt')

@section('styles')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>Dashboard Risk Owner</div>
                        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right"><i
                                class="fa-solid fa-plus"></i> Tambah Produk</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table class="table table-hovered" id="tableProducts">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Code</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="" method="post" id="deleteForm">
        @csrf
        @method('DELETE')
        <input type="submit" value="Hapus" style="display:none">
    </form>
@endsection

@push('scripts')
    
@endpush
