<?php

namespace Coaching\UserBundle\Entity;

use Coaching\UserBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coaching
 *
 * @ORM\Table(name="coaching")
 * @ORM\Entity
 */
class Coaching
{
    const STATUS_IN_PROGRESS = 0;
    const STATUS_PENDING     = 1;
    const STATUS_CANCELED    = 2;

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
     * @ORM\joinColumn(name="teacher_id", referencedColumnName="id")
     * 
     * @Assert\NotBlank()
     */
    private $teacher;

    /**
     * @ORM\ManyToOne(targetEntity="Coaching\UserBundle\Entity\User")
     * @ORM\joinColumn(name="student_id", referencedColumnName="id")
     * 
     * @Assert\NotBlank()
     */
    private $student;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;



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
     * Set teacher
     *
     * @param User $teacher
     * @return Coaching
     */
    public function setTeacher(User $teacher)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return User
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set student
     *
     * @param User $student
     * @return Coaching
     */
    public function setStudent(User $student)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return User 
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Coaching
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Coaching
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Coaching
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
