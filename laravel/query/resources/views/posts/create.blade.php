
<h1> Create New Post </h1>


<form action="{{route('post.insert')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter Title"> <br><br>
    <input type="text" name="body"  placeholder="Enter Body"> <br><br>
    <button type="submit"> Submit</button>
</form>