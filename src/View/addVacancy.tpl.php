<?php
/**
 *  @var array $data - массив входящих переменных
 *  @var object $author
 */
?>

<?php include 'header.php'; ?>
    <h1>Создание новой вакансии</h1>
<?php if(!empty($error)): ?>
    <div style="color: red;"><?= $error ?></div>
<?php endif; ?>
    <form action="/vacancy/add" method="post">
        <label for="title">Наименование вакансии:</label><br>
        <input type="text" name="title" id="title" value="<?= $_POST['title'] ?? '' ?>" size="50"><br>
        <br>
        <label for="price">Зарплата:</label><br>
        <input type="text" name="price" id="price" value="<?= $_POST['price'] ?? '' ?>" size="50" <br>
        <br>
        <label for="organization">Организация:</label><br>
        <input type="text" name="organization" id="organization" value="<?= $_POST['organization'] ?? '' ?>" size="50" <br>
        <br>
        <label for="address">Адрес:</label><br>
        <input type="text" name="address" id="address" value="<?= $_POST['address'] ?? '' ?>" size="50" <br>
        <br>
        <label for="telephone">Телефон:</label><br>
        <input type="text" name="telephone" id="telephone" value="<?= $_POST['telephone'] ?? '' ?>" size="50" <br>
        <br>
        <label for="experience">Требуемый опыт:</label><br>
        <input type="text" name="experience" id="experience" value="<?= $_POST['experience'] ?? '' ?>" size="50" <br>
        <br>
        <label for="technology">Технологии:</label><br>
        <input type="text" name="technology" id="technology" value="<?= $_POST['technology'] ?? '' ?>" size="50" <br>
        <br>
        <label for="skills">Требуемые навыки:</label><br>
        <input type="text" name="skills" id="skills" value="<?= $_POST['skills'] ?? '' ?>" size="50" <br>
        <br>
        <label for="conditions">Условия:</label><br>
        <input type="text" name="conditions" id="conditions" value="<?= $_POST['conditions'] ?? '' ?>" size="50" <br>
        <br><br><br>
        <label for="category">Категория:</label><br>
        <input type="text" name="category" id="category" value="<?= $_POST['category'] ?? '' ?>" size="50" <br>
        <br><br><br>

        <input type="submit" value="Создать вакансию">
    </form>
<?php include 'footer.php'; ?>