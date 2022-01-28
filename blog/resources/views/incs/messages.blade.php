@if($message = \Illuminate\Support\Facades\Session::get('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <p>{{ $message }}</p>
    </div>
@endif