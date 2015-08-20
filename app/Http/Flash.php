<?php

namespace App\Http;

class Flash
{
    public function create($title, $text, $type)
    {
        session()->flash('flash_message', [
            'title'  => $title,
            'text'   => $text,
            'type'   => $type,
        ]);
    }

    public function warning($title, $text)
    {
        return $this->create($title, $text, 'warning');
    }

    public function error($title, $text)
    {
        return $this->create($title, $text, 'error');
    }

    public function success($title, $text)
    {
        return $this->create($title, $text, 'success');
    }

    public function info($title, $text)
    {
        return $this->create($title, $text, 'info');
    }


}