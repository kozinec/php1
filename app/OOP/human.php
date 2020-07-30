<?php

namespace App\OOP;

//declare(strict_types=1);

class Human
{
    public function run()
    {
        print "The human can RUN";
    }

    public function speak()
    {
        print "The human can Speak";
    }

    public function eat()
    {
        print "The human can Eat";
    }

    protected function secret()
    {
        print "Only child of Human and Human cat know this secret information";
    }

    private function topsecret()
    {
        print "Only Humans cat know this Top Secret information";
    }
}

$Vasya = new Human();
$Peter = new Human();

class Ukrainian extends Human
{
  protected function secret()
  {
    print "Only child of Ukrainian and Ukrainian cat know this secret information";
  }
}

interface EuropianNation
{
  public function GermanHumans();
  public function ItalianHumans();
}

class DeadPeople
{
    public function DP()
    {
        print "It's include first part functions for Zombie";
    }
}

class Mutants
{
//  use DeadPeople;
//  use Human;
    public function Mutagen()
    {
        print "It's mutagen";
    }
}






