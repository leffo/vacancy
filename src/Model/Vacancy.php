<?php


namespace AYakovlev\Model;


use AYakovlev\Core\Request;
use AYakovlev\Exception\InvalidArgumentException;

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

    /**
     * @param int|mixed|null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @param string $organization
     */
    public function setOrganization(string $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @param string $experience
     */
    public function setExperience(string $experience): void
    {
        $this->experience = $experience;
    }

    /**
     * @param string $technology
     */
    public function setTechnology(string $technology): void
    {
        $this->technology = $technology;
    }

    /**
     * @param string $skills
     */
    public function setSkills(string $skills): void
    {
        $this->skills = $skills;
    }

    /**
     * @param string $conditions
     */
    public function setConditions(string $conditions): void
    {
        $this->conditions = $conditions;
    }

    /**
     * @param string $datecreation
     */
    public function setDatecreation(string $datecreation): void
    {
        $this->datecreation = $datecreation;
    }

    /**
     * @param int $reserv
     */
    public function setReserv(int $reserv): void
    {
        $this->reserv = $reserv;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }



    protected static function getTableName(): string
    {
        return 'vacancies';
    }

    public static function createFromArray(array $fields, User $author): Article
    {
        if (empty($fields['name'])) {
            throw new InvalidArgumentException('Не передано название вакансии');
        }

        if (empty($fields['text'])) {
            throw new InvalidArgumentException('Не передан текст статьи');
        }

        $article = new Article();

        $article->setAuthor($author);
        $article->setName($fields['name']);
        $article->setText($fields['text']);

        $article->save();

        return $article;
    }

}