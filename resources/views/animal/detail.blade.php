@extends('layouts.master')

@push('css-styles')
@endpush

@section('content')

<section id="section-header" class="vh-100 center">
    <div class="container">
        <div class="row">
            <div class="bg-white p-4 rounded shadow text-center">
                <div class="mb-4">
                    <h1>{{$animal->name}}</h1>
                    <p class="fw-semibold mb-0">{{strtoupper($animal->type->name)}}</p>
                </div>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Ciri-ciri</td>
                            <td>{{$animal->characteristics}}</td>
                        </tr>
                        <tr>
                            <td>Cara bergerak</td>
                            <td>{{$animal->movement}}</td>
                        </tr>
                        <tr>
                            <td>Reproduksi</td>
                            <td>{{$animal->reproduction}}</td>
                        </tr>
                        <tr>
                            <td>Habitat</td>
                            <td>{{$animal->habitat}}</td>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>{{$animal->food}}</td>
                        </tr>
                        <tr>
                            <td>Pemangsa</td>
                            <td>{{$animal->predator}}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="/">Kembali</a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
@endpush
