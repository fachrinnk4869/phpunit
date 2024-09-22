<?php
// tests/GroupTest.php

use PHPUnit\Framework\TestCase;

// Include the files for User and Group classes
require_once __DIR__ . '/../User.php';
require_once __DIR__ . '/../Group.php';

class GroupTest extends TestCase {
    public function testAddUserToGroup() {
        // Create a new group
        $group = new Group();

        // Create new users
        $user1 = new User('Alice');
        $user2 = new User('Bob');

        // Add users to the group
        $group->addUser($user1);
        $group->addUser($user2);

        // Assert that the group has 2 users (cardinality check)
        $this->assertEquals(2, $group->getUserCount());

        // Optional: Check if specific users are in the group
        $users = $group->getUsers();
        $this->assertContains($user1, $users);
        $this->assertContains($user1, $users);
        $this->assertContains($user2, $users);
    }
}