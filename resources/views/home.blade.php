@extends('./layouts/user')

@section('content')
<div class="container">
    <div class="row row-cols-2">
        <div class="col">
            <div class="row flex items-center mt-2">
                <img src="{{asset('images/Computing.png')}}" alt="SCI logo" width="40">
                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                    School of Computing and Informatics
                </div>
            </div>
            <div class="ml-12">
                <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                    Maseno University's School of Computing and Informatics. There are various departments within this school based on the cources offered which include; Computer Science, Information Technology, Information Communication Technology Management, and Computer Technology departments.
                </div>
            </div>
        </div>
      <div class="col">Column</div>
      <div class="col">Column</div>
      <div class="col">Column</div>
    </div>
  </div>
@endsection
