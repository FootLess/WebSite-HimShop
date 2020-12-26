{* верхний столбец *}
<div class="topMenu">
    <div class="container d-flex justify-content-center">
        <nav class="dws-menu">
            <ul>
                <li><a href="/"><i class="fas fa-home"></i>Главная </a></li>
                <li><a href="#"><i class="fas fa-align-justify"></i>Категории товаров</a>
                    <ul>
                        {foreach $rsCategories as $item}
                        <li><a href="?controller=category&id={$item['id']}">{$item['name']}</a>

                            {if isset($item['children'])}
                            <ul>
                                {foreach $item['children'] as $itemChild}
                                <li><a href="?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a></li>
                                {/foreach}
                            </ul>
                            {/if}

                        </li>
                        {/foreach}
                    </ul>
                </li>
                <li><a href="?controller=index&action=about"><i class="fas fa-address-card"></i>О нас </a></li>
            </ul>
        </nav>
        {*блок пользователя*}
        {if isset($arUser)}
        <div id="userBox" class="d-flex flex-column">
            <div class="UserBox_LineB">
                <span>Пользователь: </span>
                <a href="?controller=user" id="userLink">{$arUser['displayName']}</a>
            </div>
            <a href="?controller=user&action=logout" onclick="logout();" class="Logout">Выход</a>
        </div>
        {/if}
        {*блок корзина*}
        <div class="Cart">
            <a href="?controller=cart&action=index" title="Перейти в корзину"
                class="CartName d-flex justify-content-end" style="font-family: 'Fredoka One', cursive;">
                <i class="cartIcon fas fa-shopping-cart"></i>В корзине
                <span id="cartCntItems" class="pl-2" style="font-family: 'Roboto', sans-serif;">
                    [{if $cartCntItems>0}{$cartCntItems}{else}пусто{/if}]
                </span>
            </a>
        </div>
        {*блок регистрации*}
        <div class="Registration">
            {if ! isset($arUser)}
            {if ! isset($hideLoginBox)}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Регистрация
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Введите ваши данные:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body d-flex flex-column" id="registerBox">
                            email:
                            <input type="text" id="email" name="email" value="" />
                            пароль:
                            <input type="password" id="pwd1" name="pwd1" value="" />
                            повторить пароль:
                            <input type="password" id="pwd2" name="pwd2" value="" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-primary"
                                onclick="registerNewUser();">Зарегистрироваться</button>
                        </div>
                    </div>
                </div>
            </div>
            {/if}
            {/if}
        </div>
    </div>
</div>