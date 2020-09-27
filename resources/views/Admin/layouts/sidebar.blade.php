<div class="sidebar">
    <nav class="sidebar">
        <ul class="list-unstyled components">
            <div class="btn-home">
                <a href="{{route('dashboard')}}">Nơi em là nhà</a>
            </div>
            <hr>
            <li class="active text-center">
                <a href="#examManagement" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    Exam management
                </a>
                <ul class="collapse list-unstyled" id="examManagement">
                    <li id="examCreate" class="text-center">
                        <a href="{{route('create.exam')}}"  id="create-exam">Create new Exam</a>
                    </li>
                    <li id="examList" class="text-center">
                        <a href="{{route('get.exam.list')}}">List all exam</a>
                    </li>
                </ul>
            </li>
            <li class="text-center">
                <hr>
                <a href="#questionManagement" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy"></i>
                    Question Management
                </a>
                <ul class="collapse list-unstyled" id="questionManagement">
                    <li id="questionCreate" class="text-center">
                        <a href="{{route('create.question')}}">Create new question</a>
                    </li>
                    <li id="questionList" class="text-center">
                        <a href="{{route('get.question.list')}}">List all question</a>
                    </li>
                </ul>
            </li>
            <hr>
            <li class="text-center logout">
                <a href="{{route('logout')}}"> Hãy ra khỏi người đó đi</a>
            </li>
        </ul>
        <div class="trademark mt-auto">
            Tình em lớn như đại dương <br>
            Nồng ấm như hoa báo xuân, <br>
            Đã cho anh sức sống <br>
            Để đi tới tận cuối chân trời...
        </div>
    </nav>
</div>
<style>
    .btn-home {
        
    }
    .logout {
        background-color: none;
    }
    .logout:hover {
        background-color: red; 
        border-radius: 15px;
    }
    a:hover {
        text-decoration: none;
    }
</style>

