<?php

// Logger Trait
trait Logger {
    public function logTransaction($message) {
        echo "[LOG]: " . $message . "<br>";
    }
}

// BankAccount Class
class BankAccount {

    use Logger;

    private $balance;

    // Constructor
    public function __construct($startingBalance = 0) {
        $this->balance = $startingBalance;
        $this->logTransaction(
            "New account created with balance: $startingBalance"
        );
    }

    // Getter
    public function getBalance() {
        return $this->balance;
    }

    // Setter
    public function setBalance($newBalance) {
        $this->balance = $newBalance;
        $this->logTransaction(
            "Balance changed to: $newBalance"
        );
    }

    // Deposit
    public function deposit($amount) {
        $this->balance += $amount;

        $this->logTransaction(
            "Deposit: $amount | Current Balance: $this->balance"
        );
    }

    // Withdraw
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;

            $this->logTransaction(
                "Withdrawal: $amount | Current Balance: $this->balance"
            );
        } else {
            $this->logTransaction(
                "Withdrawal failed: Insufficient balance"
            );
        }
    }
}


// -------- TESTING THE BANK ACCOUNT -------- //

$myAccount = new BankAccount(1000);
$myAccount->deposit(500);
$myAccount->withdraw(200);
echo "<br>";
echo "Final Balance: ₱" . $myAccount->getBalance();

?>