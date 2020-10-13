<?php
declare(strict_types=1);

class Blackjack
{
private $player;
private $dealer;
private $deck;

    /**
     * Blackjack constructor.
     */
    public function __construct()
    {
        $deck = new Deck;
        $deck->shuffle();
        //this gets a specific
        $this->player = new Player($deck);
        $this->enemy = new Player($deck);
    }

    public function getplayer(){}
public function getDealer(){}

}

