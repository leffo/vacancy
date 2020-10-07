<?php

/**
 *  @var array $data - массив входящих переменных
 */
?>
<?php include 'header.php'; ?>
<?php foreach ($data as $vacancy): ?>
    <h2><a href="/vacancy/view/<?= $vacancy->getId(); ?>"><?= $vacancy->getTitle() ?></a><br>
        (id #<?= $vacancy->getId(); ?>)</h2>
    <h5>Created: <?= $vacancy->getDatecreation(); ?></h5>
    <p>
        <b>Зарплата:</b> <?= $vacancy->getPrice(); ?><br>
        <b>Организация:</b> <?= $vacancy->getOrganization(); ?><br>
        <b>Адрес: </b> <?= $vacancy->getAddress(); ?><br>
        <b>Телефон:</b> <?= $vacancy->getTelephone(); ?><br>
        <b>Требуемый опыт:</b> <?= $vacancy->getExperience(); ?><br>
        <b>Технологии:</b> <?= $vacancy->getTechnology(); ?><br>
        <b>Требуемые навыки:</b> <?= $vacancy->getSkills(); ?><br>
        <b>Условия:</b> <?= $vacancy->getConditions(); ?><br><br>
    </p>
    <hr>
<?php endforeach; ?>
<?php include 'footer.php'; ?>
