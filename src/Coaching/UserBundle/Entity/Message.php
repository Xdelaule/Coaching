<?php

namespace Coaching\UserBundle\Entity;

use Coaching\UserBundle\Entity\User;
use Coaching\UserBundle\Entity\Thread;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 */
class Message
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
     * @ORM\joinColumn(name="author_id", referencedColumnName="id")
     * 
     * @Assert\NotBlank()
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity="Coaching\UserBundle\Entity\Thread")
     * @ORM\joinColumn(name="thread_id", referencedColumnName="id")
     * 
     * @Assert\NotBlank()
     */
    private $thread;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;



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
     * Set author
     *
     * @param User $author
     * @return Message
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return User 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set thread
     *
     * @param Thread $thread
     * @return Message
     */
    public function setThread(Thread $thread)
    {
        $this->thread = $thread;

        return $this;
    }

    /**
     * Get thread
     *
     * @return Thread 
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Message
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
}
