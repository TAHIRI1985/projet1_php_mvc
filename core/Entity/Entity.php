<?php


namespace Core\Entity;

class Entity
{
    public function  __get($Key)
    {
        $method = 'get' . ucfirst($Key);
        $this->$Key = $this->$method();
        return $this->$Key;
    }
}
