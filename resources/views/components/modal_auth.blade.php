<div id="modal-auth" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 id="modal-auth-title" class="modal-title center gap-3 fw-semibold">Title</h5>
                    <button type="button" class="btn-close btn-cancel" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="modal-auth-form" action="/" method="post">
                @csrf
                <div class="my-3">
                    <div id="modal-auth-alert" class="alert alert-danger text-sm p-2 mb-3 d-none"></div>
                    <div class="form-floating mb-3" id="modal-auth-form-username">
                        <input type="text" name="username" id="modal-auth-input-username" class="form-control form-sm" placeholder="username">
                        <label for="modal-auth-input-username" class="label">Username</label>
                        <div id="alert-username" class="alert alert-danger text-sm p-2 mt-2 d-none"></div>
                    </div>
                    <div class="form-floating mb-3" id="modal-auth-form-email">
                        <input type="text" name="email" id="modal-auth-input-email" class="form-control form-sm" placeholder="email">
                        <label for="modal-auth-input-email" class="label">Email</label>
                        <div id="alert-email" class="alert alert-danger text-sm p-2 mt-2 d-none"></div>
                    </div>
                    <div class="form-floating mb-3" id="modal-auth-form-password">
                        <input type="password" name="password" id="modal-auth-input-password" class="form-control form-sm" placeholder="password">
                        <label for="modal-auth-input-password" class="label">Password</label>
                        <div id="alert-password" class="alert alert-danger text-sm p-2 mt-2 d-none"></div>
                    </div>
                    <div class="form-floating mb-3" id="modal-auth-form-password_confirmation">
                        <input type="password" name="password_confirmation" id="modal-auth-input-password_confirmation" class="form-control form-sm" placeholder="password">
                        <label for="modal-auth-input-password_confirmation" class="label">Confirm Password</label>
                        <div id="alert-password_confirmation" class="alert alert-danger text-sm p-2 mt-2 d-none"></div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-end gap-2">
                    <button type="button" class="btn btn-cancel btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button id="modal-auth-btn-submit" type="button" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
$('#modal-auth-btn-submit').on('click', function(e) {
    e.preventDefault();
    $('.alert').hide();
    let form = $('#modal-auth-form');
    let formData = new FormData(form[0]);
    let config = {
        method: form.attr('method'), url: domain + form.attr('action'), data: formData
    };
    axios(config)
    .then((response) => {
        $('#modal-auth').modal('hide');
        form.submit();
    })
    .catch((error) => {
        console.log(error.response.data);
        if(error.response.data.alert) {
            $('#modal-auth-alert').hide().removeClass('d-none').fadeIn('slow').html(error.response.data.alert);
        }
        if(error.response.data != undefined) {
            validationMessage(error.response.data.errors);
        }
    });
});
</script>
@endpush
