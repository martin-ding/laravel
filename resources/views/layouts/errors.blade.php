@if($errors->count)
    @foreach ($errors->all() as $error)
        <div class="alert-danger">{{ $error }}</div>
    @endforeach
@endif