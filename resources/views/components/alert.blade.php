<div>
    @if(session()->has('message'))
        <div class="alert alert-success ml-5 mr-5 mt-2 text-center">
            {{session()->get('message')}}
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger ml-5 mr-5 mt-2 text-center">
            {{session()->get('error')}}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger ml-5 mr-5 mt-2 text-center">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
