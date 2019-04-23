<?if (!defined('IEXFORM')) die(); /** @var array $arData */  ?>

<div class="b-pform__wrap">
  <div class="b-pform__inner">

    <div class="iexform-after-success">

      <div class="b-pform__confirmed">
        <i class="b-pform__confirmed-ico"></i>
        <div class="b-pform__thanks">Ваша заявка принята!</div>
        <div>Наш специалист свяжется с Вами</div>
      </div>

    </div>
    <div class="iexform-before-success active">

      <div class="container-fluid b-manager">
        <div class="row align-items-md-stretch align-items-center">
          <div class="col-12 d-none d-sm-block col-md-4 b-manager__pic">
            <div class="b-manager--photo align-items-end h-100 d-flex">
              <img src="/images/sm-remont/manager.jpg" class="img-fluid" alt="" />
            </div>
          </div>
          <div class="col-md-8 pr-3 pl-3">
            <div class="b-manager--title">
              <b>Консультация менеджера онлайн</b>
            </div>
            <p> <b>Здравствуйте!</b></p>
            <p>Я Мария, оператор компании СМ-Ремонт :) </p>

            <p>Как бы мы не старались сделать сайт красивым и информационным, все равно только в телефонном
              разговоре мы на 100% расскажем вам о дизайне! </p>

            <p>Я помогу вам подобрать дизайн проект и дам детальную консультацию. <b>Это займет у вас 5-10
                минут. Давайте созвонимся?</b> </p>
          </div>
        </div>
        <div class="row" style="margin-top:30px;">
          <div class="col-lg-10 offset-lg-1">
            <div class="row align-items-center">
              <div class="col-lg-5 text-center col-md-5">
                <input class="b-form__phone" name="phone" value="" type="text" data-pform-validation="required"
                  data-pform-header="Телефон" placeholder="Ваш телефон" data-pform-mask="+7 (599) 999-9999{1,10}">
              </div>
              <div class="col-lg-7 col-md-7 text-center">
                <button class="btn btn_accent blick my-3 my-md-0" type="submit">Обратный звонок</button>
              </div>
            </div>
            <div class="b-pform__item text-center" style="margin-top:30px;">
              <label class="b-pform__optlabel_single b-pform__optlabel_policy"
                data-pform-error="iexpolicy">
                <input name="iexpolicy[1]" type="checkbox" checked="checked" value="confirm" data-pform-notsend="true">
                Соглашаюсь с <a class="b-pform__policy iexmodal-show" data-iexmodal-width="700px"
                  data-iexmodal-overlay="true" href="/tools/sm-rem/libs/iexModal/policy.htm">политикой
                  конфиденциальности</a>
              </label>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>