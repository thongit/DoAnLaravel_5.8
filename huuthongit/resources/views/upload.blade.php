{{-- @if($error->any())
    <ul>
        @dd($errors)
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif --}}
<form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="tap_tin[]" multiple>
    <input type="submit">
</form>