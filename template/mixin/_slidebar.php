<a class="c-slidebar-button js-slidebar-button" href="#">
  <span class="c-slidebar-button__line">
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span class="c-slidebar-button__text is-open">MENU</span>
  <span class="c-slidebar-button__text is-close">CLOSE</span>
</a>
<div class="c-slidebar-menu js-slidebar-menu is-top-to-bottom">
  <ul>
    <li><a #="#">メニュー1</a></li>
    <li><a #="#">メニュー2</a></li>
    <li class="c-slidebar-menu__parent js-accordion">
      <span data-accordion-title="menu-title">メニュー3</span>
      <ul class="c-slidebar-menu__children" data-accordion-content="menu-text">
          <li><a #="#">メニュー3-1</a></li>
          <li><a #="#">メニュー3-2</a></li>
          <li><a #="#">メニュー3-3</a></li>
      </ul>
    </li>
    <li><a #="#">メニュー4</a></li>
    <li><a #="#">メニュー5</a></li>
    <li><a #="#">メニュー6</a></li>
  </ul>
  <a class="c-slidebar-menu__button c-button is-contact" #="#">お問い合わせ</a>
  <div class="c-slidebar-menu__sns-btns">
    <a class="c-slidebar-menu__sns-btn" #="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a class="c-slidebar-menu__sns-btn" #="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
  </div>
</div>
