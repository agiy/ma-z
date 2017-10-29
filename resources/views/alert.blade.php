@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li><span class="">・</span> {{ $error }}</li>
        @endforeach
    </ul>
@endif

@if (Session::has('flash_message'))
    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
@endif
@if (Session::has('warning_flash_message'))
    <div class="alert alert-warning">{{ Session::get('warning_flash_message') }}</div>
@endif