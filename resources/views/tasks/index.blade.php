<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>list of all tasks</h2>

        @foreach($allTasks as $t)

        <li>{{$t->name}}

            <a href="/tasks/{{$t->id}}/edit">edit</a>
            <!-- <a href="/tasks/{{$t->id}}/edit">edit</a> -->

            <form action="{{route('todos.destroy',$todo->id)}}" method="post">
                @csrf
                @method('delete')

                <input type="submit" value='delete'>
            </form>

        </li>

        @endforeach

</body>

</html>