<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 28/03/17
 * Time: 09:33
 */

namespace wcs;


class User
{
    /**
     * @var array
     */
    private $movies;
    /**
     * @var string
     */
    private $firstName = ""; // private : ctrl de la propriété
    private $lastName = "";
    private $email ="";

    /**
     * @param Movie $movie // mon type c'est un OBJET
     */
    public function addMovie($movie)
    {
        $index = md5($movie->getTitle() . $movie->getCategory());
        $this->movies[] = $movie; // $movie sera la valeur ajoutée au tableau []

    }

    /**
     * @param Movie $movie
     */
    public function removeMovie($movie)
    {
        $index = md5($movie->getTitle() . $movie->getCategory());
        unset($this->movies[$index]);
    }


    // GETTERS

    /**
     * @return string // je ne mets pas d'autres commentaires dans les autres parties car ce sont des string
     */
    public function getFirstName() // pour la lecture
    {
        if($this->firstName === "") // on test le type avec ===
        {
            return "[unknown]";
        }
            return $this->firstName;
    }

    public function getLastName()
    {
        if($this->lastName === "")
        {
            return "[unknown]";
        }
        return $this->lastName;
    }

    public function getEmail()
    {
        if($this->email === "")
        {
            return "[unknown]";
        }
        return $this->email;
    }

    // SETTERS
    public function setFirstName($firstname)
    {
        $this->firstName = $firstname;
        return $this;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this; // je retourne tout l'objet ET JE PEUX CHAINER DANS INDEX $user   ->setFirstName("Ondine")->setLastName("Pretty")
    }

    /**
     *
     */
    public function display()
    {
        echo "Firstname : " . $this->getfirstName() . PHP_EOL; // afficher le firstname de $this // on passe par les methodes on ne passe plus par la propriete mais par la methode
        echo "Lastname : " . $this->getlastName() . PHP_EOL;
        echo "Email : " . $this->getEmail() . PHP_EOL;
        echo $this->getFirstName() . " aime " . count($this->movies) . " films " .PHP_EOL;
        foreach ($this->movies as $movie){
            echo "[" . $movie->getcategory() . "] - " . $movie->getTitle() . PHP_EOL;
        }

    }



}