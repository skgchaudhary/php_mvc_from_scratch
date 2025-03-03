<?php
    trait Model {
        use Database;
        function select() {
            $column_list = "*";
            if($this->allowed_columns) {
                $column_list = implode(",", $this->allowed_columns);
            }
            $sql = "SELECT $column_list FROM $this->object";
            $connectionpdo = $this->connect();
            $stmt = $connectionpdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        function insert() {
            
        }
    }