<form method="post">
    <input type="hidden" name="title" value="Заявка">
    <div class="form-row">
        <div class="form-group">
            <input type="text" name="name" class="form-control" id="user-name--<?php echo $name = generateRandomString(); ?>" placeholder="Введите ваше имя" required>
        </div>
        <div class="form-group">
            <input type="tel" name="phone" class="form-control" id="user-phone--<?php echo $phone = generateRandomString(); ?>" placeholder="Номер телефона" required>
        </div>
        <div class="form-group form-group--btn">
            <button type="submit" class="btn btn-dark">Отправить</button>
        </div>
    </div>
</form>