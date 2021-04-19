<?php


class Shield
{
    private int $protection = 10;
    private string $image = 'shield.svg';

    /**
     * @return int
     */
    public function getProtection(): int
    {
        return $this->protection;
    }

    /**
     * @param int $protection
     * @return Shield
     */
    public function setProtection(int $protection): Shield
    {
        $this->protection = $protection;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    /**
     * @param string $image
     * @return Shield
     */
    public function setImage(string $image): Shield
    {
        $this->image = $image;
        return $this;
    }


}