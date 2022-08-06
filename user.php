<?php

namespace App;

class User {

	private $firstname;
	private $lastname;
	private $email;
	private $phonenumber;
	private $id;

	public function __construct($firstname, $lastname, $email, $phone_number,$id) {
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->phonenumber = $phone_number;
		$this->idUser = $id; 
	}

	public function isValid() {
		return $this->checkFistName() && $this->checkEmail() && $this->checkPhoneNumber();
	}

	private function checkFistName() {
		return !empty($this->firstname) && !empty($this->lastname);
	}

	private function checkEmail() {
		return !empty($this->email) && filter_var($this->email, FILTER_VALIDATE_EMAIL);
	}

	public function checkPhoneNumber() {
		return !empty($this->phonenumber);
	}

	public function setFrirstName($firstname) {
		$this->firstname = $firstname;
		return $this;
	}

	public function setLastName($lastname) {
		$this->lastname = $lastname;
		return $this;
	}

	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}

	public function setPhoneNumber($phone_number) {
		$this->phonenumber = $phone_number;
		return $this;
	}

	public function removeRemoveUser($id): self
    {
        if ($this->messages->removeElement($id)) {
            if ($id->getUser() === $this) {
                $id->setUser(null);
            }
        }

        return $this;
    }
}