<?php
/**
 *  @var array $data - массив входящих переменных
 *  @var object $author
 */
?>

<?php include 'header.php'; ?>

    <h2>
        <a href="/vacancy/view/<?= ($data['data'])->getId(); ?>"></a>
    </h2>
    <h3><b><?= $data['data']->getTitle(); ?> </b><br>
        (id #<?= $data['data']->getId(); ?>)
    </h3>
    <h5>Created: <?= $data['data']->getDatecreation(); ?></h5>

    <p>
         <b>Зарплата:</b> <?= $data['data']->getPrice(); ?><br>
        <b>Организация:</b> <?= $data['data']->getOrganization(); ?><br>
        <b>Адрес: </b> <?= $data['data']->getAddress(); ?><br>
        <b>Телефон:</b> <?= $data['data']->getTelephone(); ?><br>
        <b>Требуемый опыт:</b> <?= $data['data']->getExperience(); ?><br>
        <b>Технологии:</b> <?= $data['data']->getTechnology(); ?><br>
        <b>Требуемые навыки:</b> <?= $data['data']->getSkills(); ?><br>
        <b>Условия:</b> <?= $data['data']->getConditions(); ?><br><br>
    </p>
    <br>

<?php include 'footer.php'; ?>
