{{--if any data add , active, inactive this message will show--}}
@if(session('success'))
    <div class="alert alert-info fade in">
        <a href="#" class="close" data-dismiss="alert">×</a>
        {{ Session('success') }}
    </div>
@endif
{{--//validation error show--}}
@if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert">×</a>
        {{ $error }}
    </div>
    @endforeach
@endif
