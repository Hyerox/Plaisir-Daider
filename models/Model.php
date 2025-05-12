
<?php

class Model {
    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Add common database methods here
}