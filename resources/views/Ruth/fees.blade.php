<html>

<head>
    <title>Fees Form</title>
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
<div class="container">
    <h3 align="center">Fee Payment Details</h3>
    <!--Validation error message-->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/searchPage">Search Student</a></li>
                </ul>
            </div>
        </nav>

    <form class="form-horizontal" action="/fees/store" method="post" style="margin: 0 auto; width: 75%; text-align: left;">
        {{@csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="student">Student ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="student" placeholder="e.g. 34">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="dop">Date of Payment</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="dop" placeholder="e.g. 29/02/2010">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="amount">Amount</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="amount" placeholder="e.g. 10000">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
<br><br>
<div class="container">
    <div class="form-group">
        <label for="amount"><strong>Total Amount Paid</strong></label>
            <label for="total">
                <input type="text" class="form-control" name="total" value="{{$fees->sum('amount')}}">
            </label>
    </div>
</div>
</div>
</body>

</html>
