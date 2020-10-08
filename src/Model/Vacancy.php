<?php


namespace AYakovlev\Model;


use AYakovlev\Core\Db;
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
    protected ?string $datecreation;
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
    public function getDatecreation(): ?string
    {
        return $this->datecreation;
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
    public function setDatecreation(?string $datecreation): void
    {
        $this->datecreation = $datecreation;
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

    public static function createFromArray(array $fields, User $author): Vacancy
    {
        if (empty($fields['title'])) {
            throw new InvalidArgumentException('Не передано название вакансии');
        }

        if (empty($fields['price'])) {
            throw new InvalidArgumentException('Не передана зарплата');
        }

        if (empty($fields['organization'])) {
            throw new InvalidArgumentException('Не передана организация');
        }

        if (empty($fields['organization'])) {
            throw new InvalidArgumentException('Не передана организация');
        }

        if (empty($fields['address'])) {
            throw new InvalidArgumentException('Не передан адрес');
        }

        if (empty($fields['telephone'])) {
            throw new InvalidArgumentException('Не передан телефон');
        }

        if (empty($fields['experience'])) {
            throw new InvalidArgumentException('Не передана опыт');
        }

        if (empty($fields['technology'])) {
            throw new InvalidArgumentException('Не передан стек технологий');
        }

        if (empty($fields['skills'])) {
            throw new InvalidArgumentException('Не переданы скилсы');
        }

        if (empty($fields['conditions'])) {
            throw new InvalidArgumentException('Не переданы условия');
        }

        if (empty($fields['category'])) {
            throw new InvalidArgumentException('Не передана категория');
        }

        $vacancy = new Vacancy();
        //$db = Db::getInstance();
        $vacancy->setId(null);

        $vacancy->setTitle($fields['title']);
        $vacancy->setPrice($fields['price']);
        $vacancy->setOrganization($fields['organization']);
        $vacancy->setAddress($fields['address']);
        $vacancy->setTelephone($fields['telephone']);
        $vacancy->setExperience($fields['experience']);
        $vacancy->setTechnology($fields['technology']);
        $vacancy->setSkills($fields['skills']);
        $vacancy->setConditions($fields['conditions']);
        $vacancy->setDatecreation(null);
        $vacancy->setCategory($fields['category']);


        $vacancy->save();

        return $vacancy;
    }

}