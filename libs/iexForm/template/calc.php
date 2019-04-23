<?if (!defined('IEXFORM')) die(); /** @var array $arData */  ?>

<div class="iexform-after-success">

  <div class="b-pform__confirmed">
    <i class="b-pform__confirmed-ico"></i>
    <div class="b-pform__thanks">Ваша заявка принята!</div>
    <div>Наш специалист свяжется с Вами</div>
  </div>

</div>
<div class="iexform-before-success active">

  <div class="b-calc-form">
    <div class="b-pform__step b-pform__step_curr" data-pform-step="1">
      <div class="row">
        <div class="col-lg-12">
          <div class="b-calc-step">
            <div class="b-calc__step">Шаг 1 из 5</div>
            <div class="b-calc__line b-calc__line_1"><i></i></div>
          </div>
        </div>
        <div class="col-3">
          <div class="row mb-3 mb-sm-0">
            <div class="b-calc__pic col-12 d-none d-lg-block">
              <img src="/tools/sm-rem/img/icon/calc/mans.png" class="img-responsive">
              <div class="b-calc__left">
                <span>Федор Иванович</span>
                сметчик
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 text-center">
          <div class="b-calc__wrapper">
            <div class="b-calc__subtitle text-uppercase"><b>Выберите тип помещения:</b></div>
            <div class="b-calc__check" data-pform-error="build">
              <label class="b-pform__optlabel">
                <input name="build" type="radio" value="Новостройка" data-pform-header="Тип помещения"
                  data-pform-validation="required">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/hook.png" class="img-responsive" alt="">
                  </div>
                  Новостройка

                </span>
              </label><br>
              <label class="b-pform__optlabel">
                <input name="build" type="radio" value="Вторичка">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/building.png" class="img-responsive" alt="">
                  </div>
                  Вторичка
                </span>
              </label><br>
              <label class="b-pform__optlabel">
                <input name="build" type="radio" value="Комната в квартире">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/room.png" class="img-responsive" alt="">
                  </div>
                  Комната в квартире
                </span>
              </label><br>
              <label class="b-pform__optlabel">
                <input name="build" type="radio" value="Офисное помещение">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/cottage.png" class="img-responsive" alt="">
                  </div>
                  Офисное помещение
                </span>
              </label>
            </div>
          </div>
          <button type="submit" class="btn_calc btn btn_accent">Далее</button>
        </div>
      </div>
    </div>
    <div class="b-pform__step" data-pform-step="2">
      <div class="row">
        <div class="col-lg-12">
          <div class="b-calc-step">
            <div class="b-calc__step">Шаг 2 из 5</div>
            <div class="b-calc__line b-calc__line_2"><i></i></div>
          </div>
        </div>
        <div class="col-3">
          <div class="row mb-3 mb-sm-0">
            <div class="b-calc__pic col-12 d-none d-lg-block">
              <img src="/tools/sm-rem/img/icon/calc/mans.png" class="img-responsive">
              <div class="b-calc__left">
                <span>Федор Иванович</span>
                сметчик
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 text-center">
          <div class="b-calc__wrapper">
            <div class="b-calc__subtitle text-uppercase"><b>Выберите материалы:</b></div>
            <div class="b-calc__check" data-pform-error="src">
              <label class="b-pform__optlabel">
                <input name="src" type="radio" value="С Вашим материалом" data-pform-header="Материалы"
                  data-pform-validation="required">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/checkout.png" class="img-responsive" alt="">
                  </div>
                  С Вашим
                  материалом
                </span>
              </label>
              <label class="b-pform__optlabel">
                <input name="src" type="radio" value="С нашими черновыми материалами">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/brick-wall.png" class="img-responsive" alt="">
                  </div>
                  С нашими черновыми материалами
                </span>
              </label>
              <label class="b-pform__optlabel">
                <input name="src" type="radio" value="С нашими черновыми и лицевыми материалами">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/painting-roller.png" class="img-responsive" alt="">
                  </div>
                  С нашими черновыми и лицевыми материалами
                </span>
              </label>
            </div>
          </div>
          <button type="submit" class="btn_calc btn btn_accent">Далее</button>
        </div>
      </div>
    </div>
    <div class="b-pform__step" data-pform-step="3">
      <div class="row">
        <div class="col-lg-12">
          <div class="b-calc-step">
            <div class="b-calc__step">Шаг 3 из 5</div>
            <div class="b-calc__line b-calc__line_3"><i></i></div>
          </div>
        </div>
        <div class="col-3">
          <div class="row mb-3 mb-sm-0">
            <div class="b-calc__pic col-12 d-none d-lg-block">
              <img src="/tools/sm-rem/img/icon/calc/mans.png" class="img-responsive">
              <div class="b-calc__left">
                <span>Федор Иванович</span>
                сметчик
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 text-center">
          <div class="b-calc__wrapper">
            <div class="b-calc__subtitle text-uppercase"><b>Выберите площадь:</b></div>
            <div class="b-calc__check" data-pform-error="sqr">

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <label class="b-pform__optlabel b-pform__optlabel_small js-activate-step">
                    <input name="sqr" type="radio" value="до 15 кв.м." data-pform-header="Площадь объекта"
                      data-pform-validation="required"><i class="b-radio__custom"></i>
                    <span>до 15 кв.м.</span>
                  </label>
                  <label class="b-pform__optlabel b-pform__optlabel_small js-activate-step">
                    <input name="sqr" type="radio" value="15-40 кв.м."><i class="b-radio__custom"></i>
                    <span>15-40 кв.м.</span>
                  </label>
                  <label class="b-pform__optlabel b-pform__optlabel_small js-activate-step">
                    <input name="sqr" type="radio" value="40-60 кв.м."><i class="b-radio__custom"></i>
                    <span>40-60 кв.м.</span>
                  </label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <label class="b-pform__optlabel b-pform__optlabel_small js-activate-step">
                    <input name="sqr" type="radio" value="60-80 кв.м."><i class="b-radio__custom"></i>
                    <span>60-80 кв.м.</span>
                  </label>
                  <label class="b-pform__optlabel b-pform__optlabel_small js-activate-step">
                    <input name="sqr" type="radio" value="80-120 кв.м."><i class="b-radio__custom"></i>
                    <span>80-120 кв.м.</span>
                  </label>
                  <label class="b-pform__optlabel b-pform__optlabel_small js-activate-step">
                    <input name="sqr" type="radio" value="более 120 кв.м."><i class="b-radio__custom"></i>
                    <span>более 120 кв.м.</span>
                  </label>
                </div>
              </div>


            </div>
          </div>
          <button type="submit" class="btn_calc btn btn_accent">Далее</button>
        </div>
      </div>
    </div>
    <div class="b-pform__step" data-pform-step="4">
      <div class="row">
        <div class="col-lg-12">
          <div class="b-calc-step">
            <div class="b-calc__step">Шаг 4 из 5</div>
            <div class="b-calc__line b-calc__line_4"><i></i></div>
          </div>
        </div>
        <div class="col-3">
          <div class="row mb-3 mb-sm-0">
            <div class="b-calc__pic col-12 d-none d-lg-block">
              <img src="/tools/sm-rem/img/icon/calc/mans.png" class="img-responsive">
              <div class="b-calc__left">
                <span>Федор Иванович</span>
                сметчик
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 text-center">
          <div class="b-calc__wrapper">
            <div class="b-calc__subtitle text-uppercase"><b>Выберите тип ремонта:</b></div>
            <div class="b-calc__check" data-pform-error="rem_type">
              <label class="b-pform__optlabel">
                <input name="rem_type" type="radio" value="Косметический" data-pform-header="Тип помещения"
                  data-pform-validation="required">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/paint-roller2.png" class="img-responsive" alt="">
                  </div>
                  Косметический
                </span>
              </label>
              <label class="b-pform__optlabel">
                <input name="rem_type" type="radio" value="Капитальный">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/driller.png" class="img-responsive" alt="">
                  </div>
                  Капитальный
                </span>
              </label>
              <label class="b-pform__optlabel">
                <input name="rem_type" type="radio" value="Евро">
                <i class="b-radio__custom"></i>
                <span>
                  <div class="b-optlabel__pic">
                    <img src="/tools/sm-rem/img/icon/calc/engineer.png" class="img-responsive" alt="">
                  </div>
                  Евро
                </span>
              </label>
            </div>
          </div>
          <button type="submit" class="btn_calc btn btn_accent">Далее</button>
        </div>
      </div>
    </div>
    <div class="b-pform__step" data-pform-step="5">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="b-calc-step">
            <div class="b-calc__line b-calc__line_5"><i></i></div>
            <div class="b-calc__step">Шаг 5 из 5</div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-5">
          <div class="b-calc__final-head">
            Спасибо за ответы!
          </div>
          <div class="b-calc__final-text">
            Остался последний шаг
          </div>
          <div class="b-calc__present">
            <div class="b-calc__present_item">
              Ваша скидка составляет 5%!
            </div>
            <div class="b-calc__present_item">
              Укажите почту и вы отправим вам 7 способов как сэкономить на ремонте
            </div>
          </div>
        </div>
        <div class="col-md-1 d-none d-lg-block"></div>
        <div class="col-12 col-md-6">
          <div class="b-calc__las">
            <div class="b-form__item b-form__final_title">
              Получите расчет и зафиксируйте скидку!
            </div>
            <div class="b-form__item">
              <input type="text" class="b-form__input" name="phone" placeholder="Телефон*" data-pform-header="Телефон"
                data-pform-validation="required" data-pform-mask="+7 (999) 999-99-99{1,10}" im-insert="true">
            </div>
            <div class="b-form__item">
              <input type="text" class="b-form__input" name="email" placeholder="Почта" data-pform-header="Почта"
                data-pform-validation="required">
            </div>
            <div class="b-form__item">
              <button class="btn btn_accent">Отправить</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>