@if ($errors->any())
    <div class="red darken-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success'))
    <div class="green lighten-3">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif