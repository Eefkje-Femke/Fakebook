@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" style= "margin-top: 20px;">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success" style= "margin-top: 20px;">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" style= "margin-top: 20px;">
        {{session('error')}}
    </div>
@endif