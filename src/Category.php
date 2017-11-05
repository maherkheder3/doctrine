<?php

/**
 * @Entity @Table(name="categories")
 **/
class Category
{
    /**
     * @ManyToMany(targetEntity="Image")
     * @JoinTable(name="categories_images",
     *      joinColumns={@JoinColumn(name="categories_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="images_id", referencedColumnName="id")}
     *      )
     */
    private $images;

    public  function getImages(){

        return $this->images;
    }


    public function __construct() {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}



