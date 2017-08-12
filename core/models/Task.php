<?php

class Task
{
    private $name;
    private $completed;

    public function getName()
    {
        return $this->name;
    }

    public function isCompleted()
    {
        return $this->completed;
    }
}
