@extends('layouts.master')

@push('css-styles')
@endpush

@section('content')

<section id="section-header" class="vh-100 center">
    <div class="container">
        <div class="row">
            <div class="text-center py-4">
                <p class="text-sm mb-0">Welcome to</p>
                <h1>ANIMAL INDEX</h1>
                <div class="center gap-3 mt-5">
                    <button class="btn btn-primary" onclick="showModal('login')">Login</button>
                    <button class="btn btn-outline-success" onclick="showModal('register')">Register</button>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.modal_auth')

@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
});

function showModal(type) {
    $('.modal').modal('hide');
    $('#modal-auth-form')[0].reset();
    switch(type) {
        case 'register':
            $('#modal-auth-title').html(`<i class="bx bx-user-plus"></i>Register`);
            $('#modal-auth-form-email').show();
            $('#modal-auth-form-password_confirmation').show();
            $('#modal-auth-form').attr('action', '/register');
            $('#modal-auth-btn-submit').html('Register');
        break;
        case 'login':
            $('#modal-auth-title').html(`<i class='bx bx-log-in-circle'></i>Login`);
            $('#modal-auth-form-email').hide();
            $('#modal-auth-form-password_confirmation').hide();
            $('#modal-auth-form').attr('action', '/login');
            $('#modal-auth-btn-submit').html('Login');
        break;
    }
    $('#modal-auth').modal('show');
}

</script>
@endpush
