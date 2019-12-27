<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <form  method="POST" action="{{url('/Emailsendout/sendmail')}}">
    {{csrf_field()}}
      <div class="form-group">
        <label> email</label>
        <input type="text" id="email"name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>subject</label>
        <input type="text" id="subject"name="subject" class="form-control">
      </div>
      <div class="form-group">
        <label>message</label>
        <input type="text" id="message"name="message" class="form-control">
      </div>
 <input type="submit" value="message send" class="btn btn-success">
  </form>
</body>
</html>