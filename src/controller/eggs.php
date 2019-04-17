<?php


namespace eggs;


class eggs
{
    private $posX;
    private $posY;

    public function __construct(){
        $this->setPosX();
        $this->setPosY();
}

    /**
     * @param mixed $posX
     */
    public function setPosX()
    {
        $posX =rand (0 , 6 );
        $this->posX = $posX;
    }

    /**
     * @param mixed $posY
     */
    public function setPosY()
    {
        $posY =rand (0 , 6 );
        $this->posY = $posY;
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
}