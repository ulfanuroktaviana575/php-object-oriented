<?php class cow extends animal
{
    public $owner;
    public function __construct($family, $food, $owner)
    {
        parent::__construct($family, $food);
        $this->owner = $owner;
    }
}
