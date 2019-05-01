<?php

/**
 * @Entity @table(name="users")
 */

class User
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /**
     * @Column(type="string")
     */
    protected $name;
    /**
     * @Column(type="string")
     */
    protected $email;
    /**
     * @Column(type="string")
     */
    protected $password;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return$this->password;
    }
}