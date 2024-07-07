@extends('layouts.master')

@push('css-styles')
@endpush

@section('content')

<section id="section-header">
    <div class="container">
        <div class="row">
            <div class="center py-4">
                <h1>ANIMAL INDEX</h1>
            </div>
            <div class="w-100 d-flex gap-2 py-2">
                <select class="form-select" style="max-width: 120px">
                    <option disabled>Category</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <input type="text" class="form-control">
                <button class="center gap-2 btn btn-primary"><i class='bx bx-search-alt-2'></i>Search</button>
            </div>
        </div>
    </div>
</section>

<section id="section-thumbnails">
    <div class="container py-4">
        <div class="row">
            @for($i = 0; $i <= 8; $i++)
            <div class="col-md-4 p-3">
                <div class="bg-light rounded shadow-lg" style="height: 120px"></div>
            </div>
            @endfor
        </div>
    </div>
</section>

@endsection

@push('scripts')
@endpush
