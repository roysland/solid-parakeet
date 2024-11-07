<?php
namespace App\Controllers;
use eftec\bladeone\BladeOne;
use Monolog\Logger;
class BaseController {
    protected $db;
    protected $log;
    protected $blade;

    public function __construct(\PDO $db, Logger $log)
    {
        $this->db = $db;
        $this->log = $log;
        $this->blade = new BladeOne(TEMPLATE_PATH, CACHE_PATH, BladeOne::MODE_AUTO);
    }

    public function render($template, $data = [])
    {
        echo $this->blade->run($template, $data);
    }

    public function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}