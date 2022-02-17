var editModal = document.getElementById('editModal');
editModal.addEventListener('show.bs.modal', function (event) {
    // Кнопка, запускающая модальное окно
    var button = event.relatedTarget;

    var modalTitle = editModal.querySelector('.modal-title');

    var id = button.getAttribute('data-id');
    var name = button.getAttribute('data-name');
    var last_name = button.getAttribute('data-last_name');
    var pos = button.getAttribute('data-pos');

    var modalBodyId = document.getElementById('user-id');
    var modalBodyName = document.getElementById('user-name');
    var modalBodyLastName = document.getElementById('user-last_name');
    var modalBodyPos = document.getElementById('user-pos');

    modalTitle.textContent = 'Редактировать запись №' + id;

    modalBodyId.value = id;
    modalBodyName.value = name;
    modalBodyLastName.value = last_name;
    modalBodyPos.value = pos;
});

var deleteModal = document.getElementById('deleteModal');
deleteModal.addEventListener('show.bs.modal', function (event) {
    // Кнопка, запускающая модальное окно
    var button = event.relatedTarget;

    var modalTitle = deleteModal.querySelector('.modal-title');

    var id = button.getAttribute('data-id');

    var modalBodyId = document.getElementById('deleteUser-id');
    modalBodyId.value = id;

    modalTitle.textContent = 'Удалить человека №' + id + '?';
});