@extends('./layouts/user')

@section('navbar-brand')
    Home
@endsection

@section('content')
<div class="container">
    <div class="m-2 row">
        <div class="row m-2">
            <div class="col-sm-6">
                <div class="row flex items-center mt-2">
                    <img src="{{asset('images/Computing.png')}}" alt="SCI logo" width="30">
                    <div class="ml-2 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                        School of Computing and Informatics
                    </div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                        Maseno University's School of Computing and Informatics. There are various departments within this school based on the cources offered which include; Computer Science, Information Technology, Information Communication Technology Management, and Computer Technology departments.
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row flex items-center mt-2">
                    <img src="{{asset('images/finance.png')}}" alt="SCI logo" width="30">
                    <div class="ml-2 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                        Finance Department
                    </div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                        Finance department deals with the financial information of students. The department plays an important role in the determination of the students to be cleared based on the school fees statements and other financial obligations the students to be cleared have to the school.
                    </div>
                </div>
            </div>

        </div>
        <div class="row m-2">
            <div class="col-sm-6">
                <div class="row flex items-center mt-2">
                    <img src="{{asset('images/library.png')}}" alt="SCI logo" width="30">
                    <div class="ml-2 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                        Library Department
                    </div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                        Students in their stay at school have interactions with the library. The library department therefore holds students' records on the books and other academic resources borrowed with details of submission and pending submissions. The library record is checked in the determination of clearing a student.
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row flex items-center mt-2">
                    <img src="{{asset('images/registrar.jpg')}}" alt="SCI logo" width="30">
                    <div class="ml-2 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                        Registrar of Students and Academic Affairs
                    </div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-700 dark:text-gray-400 text-sm">
                        The Dean of Students and Academic office holds various documents partaining the academic status of the student. This can be whether the student is enrolled in Maseno University's School of Computing and Informatics, whether the student is proceeding with their studies in the enrolled courses, and/or whether the student has deferred and re-joined the institution or not.
                    </div>
                </div>
            </div>
        </div>


    </div>
  </div>
@endsection
