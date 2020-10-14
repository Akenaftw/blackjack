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
        $this->deck = new Deck;
        $this->deck->shuffle();
        $this->player = new Player($this->deck);
        $this->dealer = new Dealer($this->deck);
        $_SESSION["blackjack"] = $this;

    }

    public function getplayer()
    {
        return $this->player;
    }

    public function getDealer()
    {
        return $this->dealer;
    }

    public function getDeck()
    {
        return $this->deck;
    }

    public function setPlayer($player)
    {
        $this->player = $player;
    }


    public function setDealer($dealer)
    {
        $this->dealer = $dealer;
    }


    public function setDeck($deck)
    {
        $this->deck = $deck;
    }
}

