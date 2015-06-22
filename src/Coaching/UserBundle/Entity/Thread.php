<?php

namespace Coaching\UserBundle\Entity;

use Coaching\UserBundle\Entity\User;
use Coaching\UserBundle\Entity\Coaching;

use Doctrine\ORM\Mapping as ORM;

/**
 * Thread
 *
 * @ORM\Table(name="thread")
 * @ORM\Entity
 */
class Thread
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
     * @ORM\ManyToOne(targetEntity="Coaching\UserBundle\Entity\User")
     * @ORM\joinColumn(name="creator_id", referencedColumnName="id")
     * 
     * @Assert\NotBlank()
     */
    private $creator;

    /**
     * @ORM\ManyToOne(targetEntity="Coaching\UserBundle\Entity\User")
     * @ORM\joinColumn(name="interlocutor_id", referencedColumnName="id")
     * 
     * @Assert\NotBlank()
     */
    private $interlocutor;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100, nullable=true)
     */
    private $subject;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Coaching\UserBundle\Entity\Coaching")
     * @ORM\joinColumn(name="coaching_id", referencedColumnName="id")
     * 
     * @Assert\NotBlank()
     */
    private $coaching;



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
     * Set creator
     *
     * @param User $creator
     * @return Thread
     */
    public function setCreator(User $creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return User
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set interlocutor
     *
     * @param User $interlocutor
     * @return Thread
     */
    public function setInterlocutor(User $interlocutor)
    {
        $this->interlocutor = $interlocutor;

        return $this;
    }

    /**
     * Get interlocutor
     *
     * @return User 
     */
    public function getInterlocutor()
    {
        return $this->interlocutor;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Thread
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Thread
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set coaching
     *
     * @param Coaching $coaching
     * @return Thread
     */
    public function setCoaching(Coaching $coaching)
    {
        $this->coaching = $coaching;

        return $this;
    }

    /**
     * Get coaching
     *
     * @return Coaching 
     */
    public function getCoaching()
    {
        return $this->coaching;
    }
}
