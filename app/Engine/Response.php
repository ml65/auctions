<?php

namespace Mls65\Lotlist\Engine;

class Response {

    /**
     * @var string
     */
    public $content;

    public function json($data) {
        $node = getenv('NODE');
        $data = [
            'content' => $data,
            'node' => $node
        ];
        $this->content = json_encode($data);
        return $this;
    }

    public function response($str) {
//        $node = getenv('NODE');
//        $data = [
//            'content' => $data,
//            'node' => $node
//        ];
        $this->content = $str;
        return $this;
    }

    public function render()
    {
//        header('Content-Type: application/json');
        echo $this->content;
    }
}
