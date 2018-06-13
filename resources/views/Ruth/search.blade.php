<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
<div class="row" style="margin: 0 auto; width: 75%;">
      <div class="col-md-12">
      <h3 align="center">Student fee details</h3>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li ><a href="/fees">Back</a></li>
        </ul>
    </div>
</nav>

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