<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - ToDo List, Task Manager</title>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
<script type="text/javascript"  src="{{asset('js/show.js')}}"> </script>

</head>
<body>
<!-- partial:index.partial.html -->
<head lang="en">
    <title>Ovesyan's ToDo List</title>
</head>
<body>

<div class="wrapper">


    <div class="items">
        <ul id="tasks_list" class="sortable">
            @foreach ($todo as $data)
            <li>
                @if ($data->completed == 0)
                <input class='tasks done' type='checkbox' checked/>
                <label style='text-decoration: none ; opacity: 1;'>{{$data->title}}</label>
                <a href='#'>⨯</a>
                @else
                <input class='tasks done' type='checkbox' checked/>
                <label style='text-decoration: line-through ; opacity: 1;'>{{$data->title}}</label>
                <a href='#'>⨯</a>
                @endif

            </li>
            @endforeach
        </ul>
    </div>
</div>
</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
