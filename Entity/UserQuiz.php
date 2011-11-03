<?php

namespace Smirik\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Smirik\QuizBundle\Entity\UserQuiz
 *
 * @ORM\Table(name="smirik_users_quiz")
 * @ORM\Entity
 */
class UserQuiz
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $user_id
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @ORM\ManyToOne(targetEntity="Smirik\UserBundle\Entity\User", inversedBy="fos_user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Quiz", inversedBy="smirik_quiz")
     * @ORM\JoinColumn(name="quiz_id", referencedColumnName="id")
     */
    private $quiz;
    

    /**
     * @var integer $quiz_id
     *
     * @ORM\Column(name="quiz_id", type="integer")
     */
    private $quiz_id;

    /**
     * @var integer $current
     *
     * @ORM\Column(name="current", type="integer")
     */
    private $current;

    /**
     * @var integer $num_right_answers
     *
     * @ORM\Column(name="num_right_answers", type="integer")
     */
    private $num_right_answers;

    /**
     * @var datetime $started_at
     *
     * @ORM\Column(name="started_at", type="datetime")
     */
    private $started_at;

    /**
     * @var datetime $stopped_at
     *
     * @ORM\Column(name="stopped_at", type="datetime")
     */
    private $stopped_at;

    /**
     * @var boolean $is_active
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active;

    /**
     * @var boolean $is_closed
     *
     * @ORM\Column(name="is_closed", type="boolean")
     */
    private $is_closed;

    /**
     * @var date $created_at
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=TRUE)
     */
    protected $created_at;

    /**
     * @var date $updated_at
     *
     * @ORM\Column(type="datetime", nullable=TRUE)
     * @Gedmo\Timestampable(on="update")
     */
    protected $updated_at;

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
     * Set user_id
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set quiz_id
     *
     * @param integer $quizId
     */
    public function setQuizId($quizId)
    {
        $this->quiz_id = $quizId;
    }

    /**
     * Get quiz_id
     *
     * @return integer 
     */
    public function getQuizId()
    {
        return $this->quiz_id;
    }

    /**
     * Set current
     *
     * @param integer $current
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    }

    /**
     * Get current
     *
     * @return integer 
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Set num_right_answers
     *
     * @param integer $numRightAnswers
     */
    public function setNumRightAnswers($numRightAnswers)
    {
        $this->num_right_answers = $numRightAnswers;
    }

    /**
     * Get num_right_answers
     *
     * @return integer 
     */
    public function getNumRightAnswers()
    {
        return $this->num_right_answers;
    }

    /**
     * Set started_at
     *
     * @param datetime $startedAt
     */
    public function setStartedAt($startedAt)
    {
        $this->started_at = $startedAt;
    }

    /**
     * Get started_at
     *
     * @return datetime 
     */
    public function getStartedAt()
    {
        return $this->started_at;
    }

    /**
     * Set stopped_at
     *
     * @param datetime $stoppedAt
     */
    public function setStoppedAt($stoppedAt)
    {
        $this->stopped_at = $stoppedAt;
    }

    /**
     * Get stopped_at
     *
     * @return datetime 
     */
    public function getStoppedAt()
    {
        return $this->stopped_at;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set is_closed
     *
     * @param boolean $isClosed
     */
    public function setIsClosed($isClosed)
    {
        $this->is_closed = $isClosed;
    }

    /**
     * Get is_closed
     *
     * @return boolean 
     */
    public function getIsClosed()
    {
        return $this->is_closed;
    }

    /**
     * Set user
     *
     * @param Smirik\UserBundle\Entity\User $user
     */
    public function setUser(\Smirik\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Smirik\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set quiz
     *
     * @param Smirik\QuizBundle\Entity\Quiz $quiz
     */
    public function setQuiz(\Smirik\QuizBundle\Entity\Quiz $quiz)
    {
        $this->quiz = $quiz;
    }

    /**
     * Get quiz
     *
     * @return Smirik\QuizBundle\Entity\Quiz 
     */
    public function getQuiz()
    {
        return $this->quiz;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}