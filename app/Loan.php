<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $guarded = [];

    public function __construct()
    {

    }

    public function getMonthlyPayment()
    {

        $this->prepareLoan();
        switch ($this->type) {

            case "amortized":
                return $this->amount * (((($this->interest) / 1) * (pow((1 + (($this->interest) / 1)), ($this->term * 1)))) / ((pow((1 + (($this->interest) / 1)), ($this->term * 1))) - 1));

            case "interest_only":
                return $this->amount * ($this->interest);

            case "fixed_interest":
                return (($this->interest) * $this->amount * $this->term + $this->amount) / $this->term;

        }
    }


    public function getPaymentSchedule()
    {
        $payment = $this->getMonthlyPayment();
        $balance = $this->amount;

        for ($x = 0; $x < $this->term; $x++) {

            $schedule[$x]['#'] = $x + 1;
            $schedule[$x]['payment'] = $payment;

            switch ($this->type) {

                case "amortized":
                    $schedule[$x]['interest'] = $balance * $this->interest;
                    $schedule[$x]['capital'] = $payment - $schedule[$x]['interest'];

                    break;

                case "interest_only":
                    $schedule[$x]['interest'] = $this->amount * $this->interest;
                    $schedule[$x]['capital'] = 0;
                    if ($x == $this->term - 1)
                        $schedule[$x]['capital'] = $this->amount ;
                    break;

                case "fixed_interest":
                    $schedule[$x]['interest'] = $this->amount * $this->interest;
                    $schedule[$x]['capital'] = $payment - $schedule[$x]['interest'];
                    break;
            }
            $balance -= $schedule[$x]['capital'];
            $schedule[$x]['balance'] = $balance;
        }
        return $schedule;
    }

    private function prepareLoan(){
        $this->interest /=100;
        if($this->origination_fee)
          $this->amount *= (1+($this->origination_fee/100)) ;

    }
}
