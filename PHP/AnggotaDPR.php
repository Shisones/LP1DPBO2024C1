<?php

class AnggotaDPR {
    // Private attributes
    private $id = ''; // Id for member
    private $name = ''; // Name for member
    private $div_name = ''; // Division for member
    private $party_name = ''; // Party for member
    
    // Constructor
    public function __construct($id = 'n/a', $name = 'n/a', $div_name = 'n/a', $party_name = 'n/a') {
        $this->id = $id;
        $this->name = $name;
        $this->div_name = $div_name;
        $this->party_name = $party_name;
    }

    // Get Methods to return attribs
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getDiv() {
        return $this->div_name;
    }
    public function getParty() {
        return $this->party_name;
    }

    // Set methods to set attributes
    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setDiv($div_name) {
        $this->div_name = $div_name;
    }
    public function setParty($party_name) {
        $this->party_name = $party_name;
    }
}
    
