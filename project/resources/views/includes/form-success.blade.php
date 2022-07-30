@if (Session::has('success'))


    <div class="alert alert-primary" role="alert">
        <div class="spinner-grow spinner-grow-sm text-success me-2" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <button aria-hidden="true" class="btn-close" data-bs-dismiss="alert" type="button">×</button><b class="text-white">{{ Session::get('success') }}</b>
    </div>


@endif

@if (Session::has('unsuccess'))

    <div class="alert alert-warning" role="alert">
        <div class="spinner-grow spinner-grow-sm text-danger me-2" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <button aria-hidden="true" class="btn-close" data-bs-dismiss="alert" type="button">×</button><b class="text-white">{{ Session::get('unsuccess') }}</b>
    </div>


@endif

@if(session('message')==='f')

    <div class="alert alert-danger" role="alert">
        <div class="spinner-grow spinner-grow-sm text-danger me-2" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <button aria-hidden="true" class="btn-close" data-bs-dismiss="alert" type="button">×</button><b class="text-white">Password doesn't match</b>
    </div>



@endif    