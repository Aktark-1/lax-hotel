<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div>
<section class="contact" id="contact">
		<div class="icons-container">
<div class="col-md-4 offset-md-4">
	@if (session('success'))
	<div class="alert alert-success">{{session('success')}}</div>
	@endif
	@if($errors->any())
<div class="alert alert-danger">
    <ul>q
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
			<form action="{{route('contact.update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
   <input type="text" name="fullname" value="{{$data->name}}" placeholder="enter your fullname"><br>
   <input type="text" name="email" value="{{$data->email}}" placeholder="enter your email"><br>
   <input type="text" name="phone" value="{{$data->phone}}" placeholder="enter your mob"><br> 
    <input type="text" name="subject" value="{{$data->subject}}" placeholder="enter your subject"><br> 
    <input type="text" name="comments" value="{{$data->comments}}" placeholder="enter your comments"><br> 

   <input type="submit" value="submit"/></br>
</form>
</div>

<a href="{{route('contact.edit',$data->id)}}"></a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>