    <div class="mail_box" id="form">
	  <div class="head_form_text">НАПИШИ МНЕ</div>
	    <form action="index.php" method="POST" class="form form_container">
		  <div class="form_item">
            <label for="name" class="label_after">Ваше имя</label>
            <input type="text" placeholder ="<?php echo $args['name'] ?? 'Введите Ваше Имя'; ?> " class="cell" id="name" name="name" 
			value="<?php echo $args['name'] ?? ''; ?>" required>
          </div>
		  <div class="form_item">
            <label for="e-mail" class="label_after">Ваше e-mail</label>
            <input type="text" placeholder ="<?php echo $args['e-mail'] ?? 'Введите Ваш E-mail'; ?>" class="cell" id="e-mail" name="e-mail" 
			value="<?php echo $args['e-mail'] ?? ''; ?>" required>
          </div>
		  <div class="form_item">
            <label for="country" class="">Откуда вы?</label>
            <div class="new_select_style">
			  <img src="images/arrow_down.png" class="arrow_image">
              <select id="country" size="1" name="country" class="">
                <option value="Russia" <?php if ($args['country'] === 'Russia' || is_null($args['country'])) echo 'selected'; ?>>Россия</option>
                <option value="Ukraine" <?php if ($args['country'] === 'Ukraine') echo 'selected'; ?>>Украина</option>
                <option value="Belarus" <?php if ($args['country'] === 'Belarus') echo 'selected'; ?>>Белоруссия</option>
              </select>
            </div>
		  </div>
          <div class="form_item">
		    <fieldset>
              <legend class="">Ваш пол</legend>
              <div class="radio">
                <input type="radio" name="gender" id="male" value="male" class="" <?php if ($args['gender'] === 'male') echo 'checked'; ?>>
                <label for="male" class="radio_label">Мужской</label>
                <input type="radio" name="gender" id="female" value="female" <?php if ($args['gender'] === 'female') echo 'checked'; ?>>
                <label for="female" class="radio_label">Женский</label>
              </div>
		    </fieldset>
          </div>
          <div class="form_item">
            <label for="message" class="label_after">Ваше сообщение</label>
            <textarea class="message" id="message" name="message" required> <?php echo $args['message'] ?? ''; ?>
		    </textarea>
          </div>
          <input type="submit" class="submit_button" href="#form">
        <div><?php echo $args['result'] ?? ''; ?></div>	
	    </form>
	</div>