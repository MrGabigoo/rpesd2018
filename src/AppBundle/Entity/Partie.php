<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partie
 *
 * @ORM\Table(name="partie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartieRepository")
 */
class Partie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserAdmin", inversedBy="parties1")
     */
    private $joueur1;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserAdmin", inversedBy="parties2")
     */
    private $joueur2;

    /**
     * @var array
     *
     * @ORM\Column(name="PlateauJ1", type="json_array", nullable=true)
     */
    private $plateauJ1;

    /**
     * @var array
     *
     * @ORM\Column(name="PlateauJ2", type="json_array", nullable=true)
     */
    private $plateauJ2;

    /**
     * @var array
     *
     * @ORM\Column(name="MainJ1", type="json_array", nullable=true)
     */
    private $mainJ1;

    /**
     * @var array
     *
     * @ORM\Column(name="MainJ2", type="json_array", nullable=true)
     */
    private $mainJ2;

    /**
     * @var array
     *
     * @ORM\Column(name="Pioche", type="json_array", nullable=true)
     */
    private $pioche;

    /**
     * @var array
     *
     * @ORM\Column(name="Jetons", type="json_array")
     */
    private $jetons;

    /**
     * @var array
     *
     * @ORM\Column(name="CartesJouees", type="json_array", nullable=true)
     */
    private $cartesJouees;

    /**
     * @var array
     *
     * @ORM\Column(name="Objectifs", type="json_array", nullable=true)
     */
    private $objectifs;

    /*
     * @var int
     *
     * @ORM\Column(name="PointsJ1", type="integer")
     *
    private $points;
    */

    /**
     * @var array
     *
     * @ORM\Column(name="Actions", type="json_array")
     */
    private $actions;

    /**
     * @var int
     *
     * @ORM\Column(name="TourJoueurId", type="integer")
     */
    private $tourJoueurId;

    /**
     * @var bool
     *
     * @ORM\Column(name="Ended", type="boolean")
     */
    private $ended;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;


    public function __construct()
    {
        $this->createdAt = date('Y-m-d H:i:s');
        $this->ended = 0;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set joueur1
     *
     * @param string $joueur1
     *
     * @return Partie
     */
    public function setJoueur1($joueur1)
    {
        $this->joueur1 = $joueur1;

        return $this;
    }

    /**
     * Get joueur1
     *
     * @return string
     */
    public function getJoueur1()
    {
        return $this->joueur1;
    }

    /**
     * Set joueur2
     *
     * @param string $joueur2
     *
     * @return Partie
     */
    public function setJoueur2($joueur2)
    {
        $this->joueur2 = $joueur2;

        return $this;
    }

    /**
     * Get joueur2
     *
     * @return string
     */
    public function getJoueur2()
    {
        return $this->joueur2;
    }

    /**
     * Set mainJ1
     *
     * @param array $mainJ1
     *
     * @return Partie
     */
    public function setMainJ1($mainJ1)
    {
        $this->mainJ1 = $mainJ1;

        return $this;
    }

    /**
     * Get mainJ1
     *
     * @return array
     */
    public function getMainJ1()
    {
        return $this->mainJ1;
    }

    /**
     * Set mainJ2
     *
     * @param array $mainJ2
     *
     * @return Partie
     */
    public function setMainJ2($mainJ2)
    {
        $this->mainJ2 = $mainJ2;

        return $this;
    }

    /**
     * Get mainJ2
     *
     * @return array
     */
    public function getMainJ2()
    {
        return $this->mainJ2;
    }

    /**
     * Set pioche
     *
     * @param array $pioche
     *
     * @return Partie
     */
    public function setPioche($pioche)
    {
        $this->pioche = $pioche;

        return $this;
    }

    /**
     * Get pioche
     *
     * @return array
     */
    public function getPioche()
    {
        return $this->pioche;
    }

    /**
     * Set cartesJouees
     *
     * @param array $cartesJouees
     *
     * @return Partie
     */
    public function setCartesJouees($cartesJouees)
    {
        $this->cartesJouees = $cartesJouees;

        return $this;
    }

    /**
     * Get cartesJouees
     *
     * @return array
     */
    public function getCartesJouees()
    {
        return $this->cartesJouees;
    }

    /**
     * Set objectifs
     *
     * @param array $objectifs
     *
     * @return Partie
     */
    public function setObjectifs($objectifs)
    {
        $this->objectifs = $objectifs;

        return $this;
    }

    /**
     * Get objectifs
     *
     * @return array
     */
    public function getObjectifs()
    {
        return $this->objectifs;
    }

    /**
     * Set pointsJ1
     *
     * @param integer $pointsJ1
     *
     * @return Partie
     */
    public function setPointsJ1($pointsJ1)
    {
        $this->pointsJ1 = $pointsJ1;

        return $this;
    }

    /**
     * Get pointsJ1
     *
     * @return int
     */
    public function getPointsJ1()
    {
        return $this->pointsJ1;
    }

    /**
     * Set pointsJ2
     *
     * @param integer $pointsJ2
     *
     * @return Partie
     */
    public function setPointsJ2($pointsJ2)
    {
        $this->pointsJ2 = $pointsJ2;

        return $this;
    }

    /**
     * Get pointsJ2
     *
     * @return int
     */
    public function getPointsJ2()
    {
        return $this->pointsJ2;
    }

    /**
     * Set actionsJ1
     *
     * @param array $actionsJ1
     *
     * @return Partie
     */
    public function setActionsJ1($actionsJ1)
    {
        $this->actionsJ1 = $actionsJ1;

        return $this;
    }

    /**
     * Get actionsJ1
     *
     * @return array
     */
    public function getActionsJ1()
    {
        return $this->actionsJ1;
    }

    /**
     * Set actionsJ2
     *
     * @param array $actionsJ2
     *
     * @return Partie
     */
    public function setActionsJ2($actionsJ2)
    {
        $this->actionsJ2 = $actionsJ2;

        return $this;
    }

    /**
     * Get actionsJ2
     *
     * @return array
     */
    public function getActionsJ2()
    {
        return $this->actionsJ2;
    }

    /**
     * Set tourJoueurId
     *
     * @param integer $tourJoueurId
     *
     * @return Partie
     */
    public function setTourJoueurId($tourJoueurId)
    {
        $this->tourJoueurId = $tourJoueurId;

        return $this;
    }

    /**
     * Get tourJoueurId
     *
     * @return int
     */
    public function getTourJoueurId()
    {
        return $this->tourJoueurId;
    }

    /**
     * Set ended
     *
     * @param boolean $ended
     *
     * @return Partie
     */
    public function setEnded($ended)
    {
        $this->ended = $ended;

        return $this;
    }

    /**
     * Get ended
     *
     * @return bool
     */
    public function getEnded()
    {
        return $this->ended;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Partie
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set plateauJ1
     *
     * @param array $plateauJ1
     *
     * @return Partie
     */
    public function setPlateauJ1($plateauJ1)
    {
        $this->plateauJ1 = $plateauJ1;

        return $this;
    }

    /**
     * Get plateauJ1
     *
     * @return array
     */
    public function getPlateauJ1()
    {
        return $this->plateauJ1;
    }

    /**
     * Set plateauJ2
     *
     * @param array $plateauJ2
     *
     * @return Partie
     */
    public function setPlateauJ2($plateauJ2)
    {
        $this->plateauJ2 = $plateauJ2;

        return $this;
    }

    /**
     * Get plateauJ2
     *
     * @return array
     */
    public function getPlateauJ2()
    {
        return $this->plateauJ2;
    }

    /**
     * Set jetons
     *
     * @param array $jetons
     *
     * @return Partie
     */
    public function setJetons($jetons)
    {
        $this->jetons = $jetons;

        return $this;
    }

    /**
     * Get jetons
     *
     * @return array
     */
    public function getJetons()
    {
        return $this->jetons;
    }

    /**
     * Set actions
     *
     * @param array $actions
     *
     * @return Partie
     */
    public function setActions($actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * Get actions
     *
     * @return array
     */
    public function getActions()
    {
        return $this->actions;
    }
}