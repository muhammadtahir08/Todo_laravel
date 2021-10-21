function loadToDo()
    {
        var array = {json_encode($todo)};

        console.log(array);

        // if (localStorage.getItem('todoList')) {
        //     var items = localStorage.getItem('todoList').split(",");
        //     for (var i = 0; i < items.length; i++) {
        //         if(localStorage.getItem(items[i]) !== null){
        //             $("#tasks_list").append("<li><input class='tasks done' type='checkbox' checked/><label style='text-decoration: line-through; opacity: 0.3;'>" + items[i] + "</label><a href='#'>⨯</a></li>");
        //         }else{
        //             $("#tasks_list").append("<li><input class='tasks' type='checkbox' /><label>" + items[i] + "</label><a href='#'>⨯</a></li>");
        //         }
        //     }
        // }
    }
