<?php

namespace Main;

class Catche
{
    private $data;
    private $catcheTime = 10;

    public function __construct()
    {
        if (file_exists(__DIR__ . '/../data/currency.json')) {
            $this->data = json_decode(file_get_contents(__DIR__ . '/../data/currency.json'));
        }
    }

    public function get()
    {
        if ($this->data === null) {
            return false;
        }
        if ($this->data->timeStamp + $this->catcheTime <= time()) {
            return false;
        }
        return $this->data;
    }

    public function set(object $data)
    {
        $data->timeStamp = time();
        file_put_contents(__DIR__ . '/../data/currency.json', json_encode($data));
    }
}
