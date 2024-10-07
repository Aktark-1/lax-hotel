<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">subject</th>
      <th scope="col">comments</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
   
        @foreach ($allContact as $item)
        <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->subject}}</td>
      <td>{{$item->comments}}</td>
      <td><a href="{{route('contact.edit',$item->id)}}"class="btn btn-warning">update</a><form action="{{route('contact.destroy',$item->id)}}" method="post" style="display:inline;" onsubmit="return confirm('are your sure this data delete')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="">Delete</button>
</form>
      </td>
    </tr>
    
  @endforeach
  </tbody>
</table>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>