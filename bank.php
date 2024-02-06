<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h3>OOP Lab</h3>
      
    <?php
        class Account {
            private $acctNum;
            private $balance;

            function __construct($num, $bal){
                $this->acctNum = $num;
                $this->balance = $bal;
            }

            function getAcctNum(){
                return $this->acctNum;
            }

            function getBalance(){
                return $this->balance;
            }

            function deposit($amt){
                $this->balance += $amt;
            }

            
        function withdrawl($amt){
            if ($this->balance - $amt < 0){
                echo "Nope. Not enough<br/>";
            }
            else{
                $this->balance -= $amt;
            }
        }
        }

        $a = new Account("SR100", 100.0);
        echo $a->getAcctNum()."<br />";
        echo $a->getBalance()."<br />";

        
        $a->deposit(50.0);
        echo $a->getBalance()."<br />";

        $a->withdrawl(1000.0);
        echo $a->getBalance()."<br />";

        $a->balance = 0;
        echo $a->getBalance()."<br />";

    ?>


</body>
</html>