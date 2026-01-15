<?php
class Customer {
    public $forename;
    public $surname;
    public $accounts;

    public function __construct($forename, $surname, $accounts = []) {
        $this->forename = $forename;
        $this->surname = $surname;
        $this->accounts = $accounts;
    }

    public function getFullName() {
        return $this->forename . " " . $this->surname;
    }
}
