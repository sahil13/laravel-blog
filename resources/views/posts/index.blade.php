

<form method="post" action="save">
@csrf
<input type="text" name="title" />
<input type="text" name="comment" />

<input type="submit" value="save" name="save" />

</form>
<ul>

  @foreach($posts as $p)
    <li>
       <span> {{$p -> title}} </span>
     {{ count($p->likes) }} Likes
       <span><a href="edit/{{$p -> id}}" >Edit</a></span>
       <span><a href="delete/{{$p -> id}}" >Delete</a></span>
        </li>
   @endforeach

</ul>