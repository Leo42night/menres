<div>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal"
        data-bs-id="{{$model->id}}" data-bs-aset="{{$model->informasiAsetKritis->name}}" data-bs-jenis="{{$model->jenis}}" data-bs-kebutuhan="{{$model->kebutuhan}}">
        Edit
    </button>

    {{-- <button href="{{ route('operator.security.requirements.delete', $model) }}" class="btn btn-danger btn-sm" id="delete">Hapus</button> --}}
</div>
{{-- <x-button-action /> --}}
