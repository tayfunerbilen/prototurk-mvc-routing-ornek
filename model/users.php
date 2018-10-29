<?php

class Users extends Model {

    public function getAll()
    {
        return $this->db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
    }

}