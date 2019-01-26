<?php
    require 'scripts/connect.php';
    require 'scripts/get_region.php';

$name = $_POST['name'];
$email = $_POST['email'];
$territory = $_POST['territory'];

$result = mysqli_query($db, "INSERT INTO people (name, email, territory) 
    VALUES ('$name', '$email', '$territory')");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/chosen.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Страница регистрации</title>
</head>

<body>
    <h1>Регистрация</h1>

        <form action="index.php" method="post">
            <fieldset>
                <div>
                    <label for="name">ФИО <span class="red">*</span></label>
                    <input type="text" name="name" placeholder="ФИО">
                </div>

                <div>
                    <label for="email">EMAIL <span class="red">*</span></label>
                    <input type="text" name="email" placeholder="EMAIL">
                </div>

                <div>
                    <label for="oblast">Область <span class="red">*</span></label>
                    <select class="chzn-select" name="oblast" id="oblast">
                        <option disabled selected>Выберите область</option>
                        <?php foreach($oblasti as $oblast): ?>
                            <option value="<?=$oblast['ter_pid']?>"><?=$oblast['ter_name']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="city-select">
                    <label for="city">Город <span class="red">*</span></label>
                    <select class="chzn-select" name="city" id="city">
                        <option disabled selected>Выберите город</option>

                    </select>
                </div>

                <div class="raion-select">
                    <label for="raion">Район <span class="red">*</span></label>

                    <select class="chzn-select" name="raion" id="raion">
                        <option disabled selected>Выберите район</option>
                    </select>
                </div>
            </fieldset>
            <br>
            <fieldset>
                <input type="submit" value="Отправить">
            </fieldset>
        </form>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/chosen.jquery.min.js"></script>
    <script src="js/script.js"></script>

    <script type="text/javascript">
        $(".chzn-select").chosen(); $(".chzn-select-deselect").chosen({allow_single_deselect:true});
    </script>

</body>
</html>