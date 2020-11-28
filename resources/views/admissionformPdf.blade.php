<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">         
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>phone</th>
        <th>gender</th>
        <th>Branch</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($data as $key=>$a)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$a->name}}</td>
        <td>{{$a->email}}</td>
        <td>{{$a->phone}}</td>
        <td>{{$a->gender}}</td>
        <td>{{$a->branch}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

</body>
</html>