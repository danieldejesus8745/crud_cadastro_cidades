<?php

class Connection
{
    public function connection()
    {
        try {
            $connection = new PDO('mysql:host=enqhzd10cxh7hv2e.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ypjccqmo1jod7xq9', 'rkb6jqtcnmfggc7l', 'eifloan9xkch48lu');
            return $connection;
        } catch(PDOException $e) {
            print 'Error: ' . $e->getMessage();
        }
    }
}