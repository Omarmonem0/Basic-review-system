@if(count($errors) != 0 )
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <strong>{{$error}}</strong>
            <br>
        @endforeach
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        <strong>{{session('success')}}</strong>
    </div>
@endif