
<h2>edit task</h2>
<form action="{{route('todos.update',$todo->id)}}" method="post">
    
    <input type="text" name="name">
    

    <input type="submit" value="submit">
</form>