@if (session('success'))
    <div class="alert alert-dismissible alert-success text-right">
        <button class="close text-right my-auto" type="button" data-dismiss="alert">×</button>
        <strong>{{ session('success') }}</strong>
    </div>
@endif

