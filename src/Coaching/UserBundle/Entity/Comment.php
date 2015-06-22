<?php

namespace Coaching\UserBundle\Entity;

use Coaching\UserBundle\Entity\User;
use Coaching\UserBundle\Entity\Coaching;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity
 */
class Comment
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
     * @ORM\ManyToOne(targetEntity="Coaching\UserBundle\Entity\User")
     * @ORM\joinColumn(name="receptor_id", referencedColumnName="id")
     * 
     * @Assert\NotBlank()
     */
    private $receptor;

    /**
     * @ORM\ManyToOne(targetEntity="Coaching\UserBundle\Entity\Coaching")
     * @ORM\joinColumn(name="coaching_id", referencedColumnName="id")
     * 
     * @Assert\NotBlank()
     */
    private $coaching;

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="integer", nullable=false)
     */
    private $grade;

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
     * @return Comment
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
     * Set receptor
     *
     * @param User $receptor
     * @return Comment
     */
    public function setReceptor(User $receptor)
    {
        $this->receptor = $receptor;

        return $this;
    }

    /**
     * Get receptor
     *
     * @return User 
     */
    public function getReceptor()
    {
        return $this->receptor;
    }

    /**
     * Set coaching
     *
     * @param Coaching $coaching
     * @return Comment
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

    /**
     * Set grade
     *
     * @param integer $grade
     * @return Comment
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Comment
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
