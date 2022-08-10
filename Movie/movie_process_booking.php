<?php include('headernone.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css" />
<link rel="stylesheet" href="css/movie.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>

<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
<!-- =============================================== -->
<?php
    include('form.php');
    $frm=new formBuilder;      
  ?>
</div>
<section>
<div class="movie-facility padding-bottom padding-top">
<div class="checkout-widget checkout-card mb-0">
    <h5 class="title">Payment Option </h5>
    <ul class="payment-option">
        <li>
            <a href="#">
                <img src="images/card.png" alt="payment">
                <span>Credit Card</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="images/card.png" alt="payment">
                <span>Debit Card</span>
            </a>
        </li>
    </ul>
    <h6 class="subtitle">Enter Your Card Details </h6>

    <form class="payment-card-form" action="complete_payment.php" method="post" id="form1">
    
        <div class="form-group w-100">
            <label class="control-label"> Name on the Card</label>
            <input type="text" name="name" class="form-control" placeholder="NAME">
        </div>
        <div class="form-group w-100">
            <label class="control-label">Card Details</label>
            <input type="text" name="number" class="form-control" placeholder="Enter 16 digit card number">
            <div class="right-icon">
                <i class="flaticon-lock"></i>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Expiration</label>
            <input type="text" name="date" class="form-control" placeholder="MM/YY">
        </div>
        <div class="form-group">
            <label class="control-label">CVV</label>
            <input type="text" name="cvv" class="form-control" placeholder="CVV">
        </div>
        <div class="form-group">
            <button class="custom-button">Make Payment</button>
        </div>

    </form>

    <p class="notice">
        By Clicking "Make Payment" you agree to the <a href="#">terms
            and conditions</a>
    </p>
</div>
</div>
</section>



<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    //print_r($_SESSION);
    extract($_POST);
    include('config.php');
    $_SESSION['screen']=$screen;
    $_SESSION['seats']=$seats;
    $_SESSION['amount']=$amount;
    $_SESSION['date']=$date;
    //header('location:complete_payment.php');
?>

<script>
$(document).ready(function() {
    $('#form1').bootstrapValidator({
        fields: {
            name: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The Name is required and can\'t be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: 'The Name can only consist of alphabets'
                    }
                }
            },
            number: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The Card Number is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 16,
                        max: 16,
                        message: 'The Card Number must 16 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid Card Number'
                    }
                }
            },
            date: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The Expire Date is required and can\'t be empty'
                    }
                }
            },
            cvv: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The cvv is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 3,
                        message: 'The cvv must 3 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid cvv'
                    }
                }
            }
        }
    });
});
</script>
