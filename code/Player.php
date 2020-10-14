<?php
declare(strict_types=1);

class Player
{
    protected $cards = array();
    protected bool $lost = false;

    /**
     * Player constructor.
     */
    public function __construct($deck)
    {
        for ($i = 0; $i < 2; $i++) {
            array_push($this->cards, $deck->drawCard());
        }
    }

    public function hit($deck): void
    {
        if (!$this->hasLost()){
        array_push($this->cards, $deck->drawCard());
        if ($this->totalScore() > 21) {
            $this->surrender();
        }
        }
    }

    public function surrender()
    {
        $this->lost = true;
    }

    public function getScore()
    {

    }

    public function hasLost()
    {
        return $this->lost;
    }

    public function totalScore()
    {
        $value = 0;
        foreach ($this->cards as $card) {
            $value = $value + $card->getValue();
        }
        echo $value;
        return $value;
    }

}

class Dealer extends Player{
    public function hit($deck):void{
        do{
            parent::hit($deck);
        }
        while($this->totalScore()<15);
    }
}