<?php

/**
 * @Entity @Table(name="images")
 **/
class Image
{
    // ...

    /**
     * @ManyToMany(targetEntity="Category")
     * @JoinTable(name="categories_images",
     *      joinColumns={@JoinColumn(name="images_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="categories_id", referencedColumnName="id")}
     *      )
     */
    protected  $categories = null;

    public  function getCategories(){

        return $this->categories;
    }

    public function setCategories($category){

        $this->categories[] = $category;
    }

    public function __construct() {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string")**/
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



