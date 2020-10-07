<?php


namespace AYakovlev\Model;


use AYakovlev\Core\Request;

class Vacancy extends ActiveRecordEntity
{
    protected ?int $id;

    protected string $title;
    protected int $price;
    protected string $organization;
    protected string $address;
    protected string $telephone;
    protected string $experience;
    protected string $technology;
    protected string $skills;
    protected string $conditions;
    protected string $datecreation;
    protected int $reserv;
    protected string $category;

    public function __construct()
    {
        if (isset(Request::$params[3])) {
            $this->id = Request::$params[3];
        }
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getOrganization(): string
    {
        return $this->organization;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @return string
     */
    public function getExperience(): string
    {
        return $this->experience;
    }

    /**
     * @return string
     */
    public function getTechnology(): string
    {
        return $this->technology;
    }

    /**
     * @return string
     */
    public function getSkills(): string
    {
        return $this->skills;
    }

    /**
     * @return string
     */
    public function getConditions(): string
    {
        return $this->conditions;
    }

    /**
     * @return string
     */
    public function getDatecreation(): string
    {
        return $this->datecreation;
    }

    /**
     * @return int
     */
    public function getReserv(): int
    {
        return $this->reserv;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    protected static function getTableName(): string
    {
        return 'vacancies';
    }
}