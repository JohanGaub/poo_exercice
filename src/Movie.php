<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 28/03/17
 * Time: 10:27
 */

namespace wcs;


class Movie
{
    private $title      ="";
    private $category   ="";


    // GETTERS
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    // SETTERS
    /**
     * @param string $title
     * @return Movie
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * @param string $category
     * @return Movie
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }




}