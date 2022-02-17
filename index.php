<?php require_once 'Controller.php'; ?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>crud</title>
</head>
<body>
<div class="container" >

<div class="table-responsive" >
    <table class="table table-striped table-md align-middle" style="width: 75%" >
        <thead>
        <tr>
            <th scope="col" style="width: 5%">#</th>
            <th scope="col" style="width: 15%">Имя</th>
            <th scope="col" style="width: 15%">Фамилия</th>
            <th scope="col" style="width: 15%">Должность</th>
            <th scope="col" style="width: 15%">Кнопки</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($view as $value) { ?>
        <tr>
            <td><?=$value['id'] ?></td>
            <td><?=$value['name'] ?></td>
            <td><?=$value['last_name'] ?></td>
            <td><?=$value['pos'] ?></td>
            <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $value['id'] ?>" data-name="<?= $value['name'] ?>" data-last_name="<?= $value['last_name'] ?>" data-pos="<?= $value['pos'] ?>">Изменить</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?= $value['id'] ?>">Удалить</button>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Добавить человечка</button>

</div>
</div>

<!-- MODAL!!! -->

<!-- EDIT MODAL -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="user-name" class="col-form-label">Имя:</label>
                        <input class="form-control" name="name" id="user-name">
                    </div>
                    <div class="mb-3">
                        <label for="user-last_name" class="col-form-label">Фамилия:</label>
                        <input class="form-control" name="last_name" id="user-last_name"></input>
                    </div>
                    <div class="mb-3">
                        <label for="user-pos" class="col-form-label">Должность:</label>
                        <input class="form-control" name="pos" id="user-pos"></input>
                    </div>

                    <input type="hidden" name="id" id="user-id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                <button type="submit" name="action" value="editRow" class="btn btn-success">Изменить</button>
            </div>
                </form>
        </div>
    </div>
</div>

<!-- DELETE MODAL -->

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                Вы действительно хотите удалить запись?
            </div>
            <div class="modal-footer">
                <form action="" method="post">
                    <input type="hidden" name="id" id="deleteUser-id">

                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Нет</button>
                <button type="submit" name="action"  value="deleteRow" class="btn btn-danger">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ADD MODAL -->

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Добавить человечка в список</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="addUser-name" class="col-form-label">Имя:</label>
                        <input class="form-control" name="name" id="addUser-name">
                    </div>
                    <div class="mb-3">
                        <label for="addUser-last_name" class="col-form-label">Фамилия:</label>
                        <input class="form-control" name="last_name" id="addUser-last_name"></input>
                    </div>
                    <div class="mb-3">
                        <label for="addUser-pos" class="col-form-label">Должность:</label>
                        <input class="form-control" name="pos" id="addUser-pos"></input>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                <button type="submit" name="action" value="addRow" class="btn btn-success">Добавить</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Вариант 1: Bootstrap в связке с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="scripts.js"></script>
</body>
</html>