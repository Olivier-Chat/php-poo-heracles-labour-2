<?php
class Weapon
{
    private int $damage = 10;
    private string $image = 'sword.svg';

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @param int $damage
     * @return Weapon
     */
    public function setDamage(int $damage): Weapon
    {
        $this->damage = $damage;
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
     * @return Weapon
     */
    public function setImage(string $image): Weapon
    {
        $this->image = $image;
        return $this;
    }

}