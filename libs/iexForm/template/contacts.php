<?if (!defined('IEXFORM')) die(); /** @var array $arData */  ?>


<div class="iexform-after-success">

  <div class="b-pform__confirmed">
    <i class="b-pform__confirmed-ico"></i>
    <div class="b-pform__thanks">Заявка успешно отправлена!</div>
  </div>

</div>
<div class="iexform-before-success active">
  <div class="row contacts--form">
    <div class="col-12 col-md-4">
      <div class="form--item">
        <input type="text" name="name" placeholder="Имя" data-pform-validation="required" data-pform-header="Имя" class="form--input" />
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="form--item">
        <input type="text" name="phone" data-pform-mask="+7 (599) 999-9999{1,10}" placeholder="Телефон" data-pform-validation="required" data-pform-header="Телефон" class="form--input" />
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="form--item">
        <input type="text" name="mail" placeholder="Почта" data-pform-validation="required" data-pform-header="Почта" class="form--input" />
      </div>
    </div>
    <div class="col-12 my-3">
      <div class="form--item">
        <textarea class="form--input" name="msg" id="feedback-msg" data-pform-validation="required" data-pform-header="Сообщение" placeholder="Сообщение"></textarea>
      </div>
    </div>
    <div class="col-12">
      <input type="submit" value="Отправить" class="btn btn--red" />
    </div>
  </div>
</div>