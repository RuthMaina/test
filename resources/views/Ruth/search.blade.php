<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Ruth
 * Date: 12/06/2018
 * Time: 12:43
 */
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="/student">Student</a></li>
      <li><a href="/fees">Fees</a></li>
      <li><a href="/searchPage">Search</a></li>
    </ul>
  </div>
</nav>

<div class="row" style="margin: 0 auto; width: 75%;">
      <div class="col-md-12">
      <h3 align="center">Student fee details</h3>


<form action="/search" method="post">
    {{ csrf_field() }}
    <div class="form-group">
              <div class="col-sm-10">
                  <label class="control-label col-sm-2">
                      <input type="text" class="form-control" name="studentNo" placeholder="Enter the student number" style="width: 250px">
                      <input type="submit" class="btn btn-primary" value="Search">
                  </label>
              </div>
            
            </button>
    </div>
</form>
@if(isset($details))
    <table class="table table-bordered">
        <thead>
            <tr>
            <th>Student Number</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
            @foreach($details as $id)
            <tr>
                <td>{{$id->studentNo}}</td>
                <td>{{$id->amount}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@elseif(isset($message))
    <p>{{$message}}</p>
@endif
</div>
</div>
</body>
</html>
