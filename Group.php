<?php
require_once 'User.php';
// Group.php
class Group {
private $users = [];

public function addUser(User $user) {
    $this->users[] = $user;
}

public function getUserCount() {
    return count($this->users);
}

public function getUsers() {
    return $this->users;
}
}