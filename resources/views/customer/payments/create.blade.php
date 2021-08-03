<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex align-items-center justify-content-center" style="height: 500px;">

        <div class="d-flex align-items-center justify-content-center">
            <div class="card p-5 m-2">
                {{$errors}}

                <form method="POST" action="{{ route('payment.gateway') }}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="amount" class="form-control" name="amount" />
                        <label class="form-label" for="amount">Enter Amount</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="discount" name="discount" class="form-control" />
                        <label class="form-label" for="discount" >Discount in percentage</label>
                    </div>

                    <select class="select2 mb-4" name="payment_type">
                        <option selected>Choose Payment Options</option>
                        <option value="1">Bank Payment</option>
                        <option value="2">Credit Card Payment</option>
                      </select>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Make Payment</button>
                </form>
            </div>

        </div>

    </div>
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</html>
