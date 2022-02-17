<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Controller {

    private $connect;

    public function __construct()
    {
        require_once 'db_config.php';
        $this->connect = $pdo;
    }

    public function updTable($values)
    {
        if(isset($values['action']))
        {
            $action = array_pop($values);
            $this->$action($values);

            header('Location: '. $_SERVER['HTTP_REFERER']);
        }
    }

    public function render()
    {
        $sql = $this->connect->prepare("SELECT * FROM `users`");
        $sql->execute();
        return $sql->fetchAll();
    }

    private function addRow($arr)
    {
        $sql = ("INSERT INTO `users`(`name`, `last_name`, `pos`) VALUES( :name, :last_name, :pos)");
        $query = $this->connect->prepare($sql);
        $query->execute($arr);
    }

    private function deleteRow($arr)
    {
        $sql = "DELETE FROM users WHERE id= :id";
        $query = $this->connect->prepare($sql);
        $query->execute($arr);
    }

    private function editRow($arr)
    {
        $sql = "UPDATE users SET name= :name, last_name= :last_name, pos= :pos WHERE id= :id";
        $query = $this->connect->prepare($sql);
        $query->execute($arr);
    }
}


$table = new Controller();

$table->updTable($_POST);

$view = $table->render();
