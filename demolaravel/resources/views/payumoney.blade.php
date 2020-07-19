<?php
   
    $MERCHANT_KEY = "W2Cy5Te9"; // add your id
    $SALT = "4WD0eCOIWo"; // add your id
    $auth_header = "owBAlbwKE3gKwC1zB7eZ5tCzr6EXaPfEaIsirrgzPHQ=";

    

     $PAYU_BASE_URL = "https://sandboxsecure.payu.in";
   
    $action = '';
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    $posted = array();
    $posted = array(
        'key' => $MERCHANT_KEY,
        'txnid' => $txnid,
        'amount' => $prod['amount'][0],
        'firstname' => $prod['name'],
        'email' => $prod['email'],
        'productinfo' => 'PHP Project Subscribe',
        'surl' => 'http://demolaravel.smrati/success/',
        'furl' => 'http://demolaravel.smrati/Paymentfailure/',
        'service_provider' => 'payu_paisa',
    );
 
 

    if(empty($posted['txnid'])) {
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    } 
    else 
    {
        $txnid = $posted['txnid'];
    }

//How to integrate Paypal payment gateway using Laravel 5
    
    $hash = '';
    $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
    
    if(empty($posted['hash']) && sizeof($posted) > 0) {
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';	
        foreach($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
        }
        $hash_string .= $SALT;

        $hash = strtolower(hash('sha512', $hash_string));
        $action = $PAYU_BASE_URL . '/_payment';
    } 
    elseif(!empty($posted['hash'])) 
    {
        $hash = $posted['hash'];
        $action = $PAYU_BASE_URL . '/_payment';
    }
    

?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
           payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    Processing.....
        <form action="<?php echo $action; ?>" method="post" name="payuForm"><br />
            <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" /><br />
            <input type="hidden" name="hash" value="<?php echo $hash ?>"/><br />
            <input type="hidden" name="txnid" value="<?php echo $txnid ?>" /><br />
                                               
            <input type="hidden" name="amount" value="{{$prod['amount']}}" /><br />
            <input type="hidden" name="firstname" id="firstname" value="{{$prod['name']}}" /><br />
            <input type="hidden" name="email" id="email" value="{{$prod['email']}}" /><br />
            <input type="hidden" name="productinfo" value="PHP Project Subscribe"><br />
       
            <input type="hidden" name="surl" value="http://demolaravel.smrati/success/?txn_msg=success&txn_id=<?php echo $txnid ?>&txn_amt={{$prod['amount']}}&name={{$prod['name']}}&email={{$prod['email']}}&hash={{$prod['email']}}&mobile_no={{$prod['mobile_no']}}&message={{$prod['message']}}" /><br />
            <input type="hidden" name="furl" value="http://demolaravel.smrati/Paymentfailure/" /><br />
            <input type="hidden" name="service_provider" value="payu_paisa"  /><br />
            <?php
            if(!$hash) { ?>
                <input type="submit" value="Submit" />
            <?php } ?>
        </form>
  </body>
</html>