<?php

    require_once'./vendor/autoload.php';
    use App\classes\calculator;

    $result = '';
   if(isset($_POST['first_number']))

   {
    $calculator = new calculator($_POST);
    $result = $calculator->Mycalculator();
   }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calculator</title>
    <link rel="stylesheet" href="./asset/css/bootstrap.css">
</head>
<body>
        <section class="bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                    <div class="card-header rounded-0">
                        My Calculator
                    </div>
                    <div class="card-body rounded-0">
                    <form action="" method="POST">
                    <div class="form-group row">
                    <label class="col from-label col-md-3">First number</label>
                    <div class="col-md-9">
                        <input type="number" placeholder="First number" name="first_number" class="form-control">
                    </div>
                    </div>
                            <div class="form-group row">
                            <label class="col from-label col-md-3">Second number</label>
                            <div class="col-md-9">
                                <input type="number" placeholder="Second number" name="second_number" class="form-control">
                            </div>
                            </div>

                                        <div class="form-group row">
                                        <label class="col from-label col-md-3">Result</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder=" Result" value="<?php echo $result ; ?>"  class="form-control">
                                        </div>
                                        </div>
                            <div class="form-group row">
                            <label class="col from-label col-md-3"></label>
                            <div class="col-md-9">
                                <input type="Submit" name="btn" class="btn btn-success" value="+">
                                <input type="Submit" name="btn" class="btn btn-success" value="-">
                                <input type="Submit" name="btn" class="btn btn-success" value="*">
                                <input type="Submit" name="btn" class="btn btn-success" value="/">
                            </div>
                            </div>
                    
                    </div>
                    </form>
                    </div>
                    
                    </div>
                
                
                </div>
        
          </div>
        </section>
</body>
</html>