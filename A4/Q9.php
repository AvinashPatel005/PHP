<?php
class BankAccount {
    protected $name;
    protected $balance;

    public function __construct($name, $balance) {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        echo "Depositing $amount<br>";
        $this->balance += $amount;
    }

    public function withdrawal($amount) {
        if($this->balance>=$amount){
            echo "Withdrawing $amount<br>";
            $this->balance -= $amount;
        }
        else{
            echo "Insufficient Balance<br>";
        }
    }

    public function getBalance() {
        echo "Balance:".$this->balance."<br>";
    }
}

class SavingsAccount extends BankAccount {
    protected $interestRate;

    public function __construct($name, $balance, $interestRate) {
        parent::__construct($name, $balance);
        $this->interestRate = $interestRate;
    }

    public function addInterest() {
        echo "Interest Gain ".(($this->balance * $this->interestRate)/100)."<br>";
        $this->balance += ($this->balance * $this->interestRate)/100;
    }
}

class CheckingAccount extends BankAccount {
    protected $freeWithdrawals;
    protected $withdrawalFee;

    public function __construct($name, $balance, $freeWithdrawals, $withdrawalFee) {
        parent::__construct($name, $balance);
        $this->freeWithdrawals = $freeWithdrawals;
        $this->withdrawalFee = $withdrawalFee;
    }

    public function withdrawal($amount) {
        if ($this->freeWithdrawals > 0) {
            parent::withdrawal($amount);
            $this->freeWithdrawals--;
        } else {
            echo "Extra Fee included  ";
            parent::withdrawal($amount + $this->withdrawalFee);
        }
    }
}
echo "Saving:<br>";
$savings = new SavingsAccount("Savings", 10000, 5);
$savings->getBalance();
$savings->addInterest();
$savings->withdrawal(100);
$savings->deposit(1000);
$savings->getBalance();

echo "<br>Checking:<br>";
$checking = new CheckingAccount("Checking", 1500, 2, 50);
$checking->getBalance();
$checking->withdrawal(100);
$checking->withdrawal(100);
$checking->withdrawal(100);
$checking->getBalance();
?>
