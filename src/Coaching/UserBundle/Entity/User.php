<?php

namespace Coaching\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username", "email"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="idriot", type="string", length=50, nullable=false)
     */
    private $idriot;

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=50, nullable=true)
     */
    private $skype;

    /**
     * @var string
     *
     * @ORM\Column(name="mumble", type="string", length=50, nullable=true)
     */
    private $mumble;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=50, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="teamspeak", type="string", length=50, nullable=true)
     */
    private $teamspeak;

    /**
     * @var string
     *
     * @ORM\Column(name="twitch", type="string", length=50, nullable=true)
     */
    private $twitch;

    /**
     * @var string
     *
     * @ORM\Column(name="league", type="string", length=50, nullable=false)
     */
    private $league;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set idriot
     *
     * @param string $idriot
     * @return User
     */
    public function setIdriot($idriot)
    {
        $this->idriot = $idriot;

        return $this;
    }

    /**
     * Get idriot
     *
     * @return string 
     */
    public function getIdriot()
    {
        return $this->idriot;
    }

    /**
     * Set skype
     *
     * @param string $skype
     * @return User
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string 
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set mumble
     *
     * @param string $mumble
     * @return User
     */
    public function setMumble($mumble)
    {
        $this->mumble = $mumble;

        return $this;
    }

    /**
     * Get mumble
     *
     * @return string 
     */
    public function getMumble()
    {
        return $this->mumble;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return User
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set teamspeak
     *
     * @param string $teamspeak
     * @return User
     */
    public function setTeamspeak($teamspeak)
    {
        $this->teamspeak = $teamspeak;

        return $this;
    }

    /**
     * Get teamspeak
     *
     * @return string 
     */
    public function getTeamspeak()
    {
        return $this->teamspeak;
    }

    /**
     * Set twitch
     *
     * @param string $twitch
     * @return User
     */
    public function setTwitch($twitch)
    {
        $this->twitch = $twitch;

        return $this;
    }

    /**
     * Get twitch
     *
     * @return string 
     */
    public function getTwitch()
    {
        return $this->twitch;
    }

    /**
     * Set league
     *
     * @param string $league
     * @return User
     */
    public function setLeague($league)
    {
        $this->league = $league;

        return $this;
    }

    /**
     * Get league
     *
     * @return string 
     */
    public function getLeague()
    {
        return $this->league;
    }
}
