<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\View;
use AYakovlev\Exception\UnauthorizedException;
use AYakovlev\Model\User;
use AYakovlev\Model\Vacancy;

class VacancyController extends AbstractController
{
    private int $idVacancy;
    protected Vacancy $vacancy;

    public function __construct()
    {
        parent::__construct();
        $this->vacancy = new Vacancy();
        $this->idVacancy = $this->vacancy->getId();
    }

    /**
     * @return int
     */
    public function getIdVacancy(): int
    {
        return $this->idVacancy;
    }

    /**
     * @param int $idVacancy
     */
    public function setIdVacancy(int $idVacancy): void
    {
        $this->idVacancy = $idVacancy;
    }

    public function view(): void
    {
        $data = Vacancy::getById($this->idVacancy);

        if ($data === null) {
            View::render("404", (array) $this->idVacancy, 404);
            return;
        }

        View::render("vacancy", [
            'data' => $data,
        ]);
    }

    public function add(): void
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }

        View::render("addVacancy", []);
        return;
    }
}