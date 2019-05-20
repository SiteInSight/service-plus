<?if (!defined('IEXFORM')) die(); /** @var array $arData */  ?>

<div class="iexform-after-success">

  <div class="b-pform__confirmed">
    <i class="b-pform__confirmed-ico"></i>
    <div class="b-pform__thanks">Заявка успешно отправлена!</div>
  </div>

</div>
<div class="iexform-before-success active">
  <div class="modal--body">
    <div class="form-group">
      <span class="form--span">
        <input type="text" name="name"  placeholder="Имя" data-pform-validation="required" data-pform-header="Имя" /></span>

    </div>
    <div class="form-group">
      <span class="form--span">
        <input type="text" name="phone"  placeholder="+7 (9XX) XXX-XX-XX" data-pform-mask="+7 (599) 999-9999{1,10}" data-pform-validation="required" data-pform-header="Телефон" /></span>

    </div>
    <div class="form-group">
      <span class="form--span">
        <input type="text" name="message"  placeholder="Сообщение" data-pform-validation="required" data-pform-header="Сообщение" /></span>

    </div>
    <div class="form-group form-btn">
      <button class="btn btn--red">Отправить</button>
    </div>
    <div class="form-group form-policy">
      Указывая свои данные вы даёте согласие на обработку персональных
      данных, в соответствии с
      <a class="b-pform__policy iexmodal-show" data-iexmodal-width="700px" data-iexmodal-overlay="true"
        href="libs/iexModal/policy.htm">политикой конфиденциальности</a>
    </div>
  </div>
</div>