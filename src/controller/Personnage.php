<?php


namespace perso;


class Personnage
{
    private $name;
    private $posX = 0;
    private $posY = 0;
    private $pv = 200;
    private $speed;
    private $skills;
    private $strength;
    private $eggsCount;

    public function __construct($name, $speed, $strength, $posX, $posY, $eggsCount)
    {
        $this->setName($name);
        $this->setSpeed($speed);
        $this->setStrength($strength);
        $this->setPosX($posX);
        $this->setPosY($posY);
        $this->setEggsCount($eggsCount);

    }

    // getters
    /**
     * @return mixed
     */
    public function getName() :string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPosX()
    {
        return $this->posX;
    }

    /**
     * @return mixed
     */
    public function getPosY()
    {
        return $this->posY;
    }

    /**
     * @return mixed
     */
    public function getPv() :int
    {
        return $this->pv;
    }

    /**
     * @return mixed
     */
    public function getSpeed() :int
    {
        return $this->speed;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @return mixed
     */
    public function getEggsCount()
    {
        return $this->eggsCount;
    }

    //setters

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $posX
     */
    public function setPosX($posX): void
    {
        if($posX <= 0) {
            $posX = 0;
        }
        $this->posX = $posX;
    }

    /**
     * @param mixed $posY
     */
    public function setPosY($posY): void
    {
        if($posY <= 0) {
            $posY = 0;
        }
        $this->posY = $posY;
    }

    /**
     * @param mixed $pv
     */
    public function setPv($pv): void
    {
        $this->pv = $pv;
    }

    /**
     * @param mixed $seed
     */
    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @param array $skills
     */
    public function setSkills(array $skills): void
    {
        $this->skills = $skills;
    }

    /**
     * @param mixed $strength
     */
    public function setStrength($strength): void
    {
        $this->strength = $strength;
    }

    /**
     * @param mixed $eggsCount
     */
    public function setEggsCount($eggsCount): void
    {
        $this->eggsCount = $eggsCount;
    }

    // methods

    public function move($direction)
    {
        switch ($direction) {
            case 'up' :
                $this->setPosY($this->getPosY() - $this->getSpeed());
                break;
            case 'right' :
                $this->setPosX($this->getPosX() - $this->getSpeed());
                break;
            case 'down' :
                $this->setPosY($this->getPosY() - $this->getSpeed());
                break;
            case 'left' :
                $this->setPosX($this->getPosX() - $this->getSpeed());
                break;
        }
    }

    public function attack($target)
    {
        $target->setPv($target->getPv() - rand($this->getStrength() - 3, $this->getStrength()));
    }

    public function status() {
        return $this->getName() . ': ' . $this->getPv() . '<br/>';
    }
}
