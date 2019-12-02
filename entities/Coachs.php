<?php
namespace Entities;

class Teams extends Entity
{
  /**
   * @var int
   */
  protected $id;
  /**
   * @var string
   */
  protected $name;
  /**
   * @var \DateTime
   */
  protected $birthday_date;
  /**
   * @var string
   */
  protected $birthday_place;
  /**
   * @var string
   */
  protected $nationality;
  /**
   * @var string
   */
  protected $photo;
  /**
   * @var string
   */
  protected $link;
  
  /**
   * Get the value of Id
   *
   * @return int
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Set the value of Id
   *
   * @param int $id
   *
   * @return self
   */
  public function setId($id)
  {
      $this->id = $id;

      return $this;
  }

  /**
   * Get the value of Name
   *
   * @return string
   */
  public function getName()
  {
      return $this->name;
  }

  /**
   * Set the value of Name
   *
   * @param string $name
   *
   * @return self
   */
  public function setName($name)
  {
      $this->name = $name;

      return $this;
  }

  /**
   * Get the value of Birthday Date
   *
   * @return \DateTime
   */
  public function getBirthdayDate()
  {
      return $this->birthday_date;
  }

  /**
   * Set the value of Birthday Date
   *
   * @param \DateTime $birthday_date
   *
   * @return self
   */
  public function setBirthdayDate(\DateTime $birthday_date)
  {
      $this->birthday_date = $birthday_date;

      return $this;
  }

  /**
   * Get the value of Birthday Place
   *
   * @return string
   */
  public function getBirthdayPlace()
  {
      return $this->birthday_place;
  }

  /**
   * Set the value of Birthday Place
   *
   * @param string $birthday_place
   *
   * @return self
   */
  public function setBirthdayPlace($birthday_place)
  {
      $this->birthday_place = $birthday_place;

      return $this;
  }

  /**
   * Get the value of Nationality
   *
   * @return string
   */
  public function getNationality()
  {
      return $this->nationality;
  }

  /**
   * Set the value of Nationality
   *
   * @param string $nationality
   *
   * @return self
   */
  public function setNationality($nationality)
  {
      $this->nationality = $nationality;

      return $this;
  }

  /**
   * Get the value of Photo
   *
   * @return string
   */
  public function getPhoto()
  {
      return $this->photo;
  }

  /**
   * Set the value of Photo
   *
   * @param string $photo
   *
   * @return self
   */
  public function setPhoto($photo)
  {
      $this->photo = $photo;

      return $this;
  }

  /**
   * Get the value of Link
   *
   * @return string
   */
  public function getLink()
  {
      return $this->link;
  }

  /**
   * Set the value of Link
   *
   * @param string $link
   *
   * @return self
   */
  public function setLink($link)
  {
      $this->link = $link;

      return $this;
  }
