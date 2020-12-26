{* Страница категории *}
<h1>{$rsCategory['name']}</h1>
<div class="row">
{foreach $rsProducts as $item name=products}
    {if $item['status'] == 1}
        <div class="d-flex flex-column rounded itemProduct">
            <a href="?controller=product&id={$item['id']}/">
                <img src="www/images/products/{$item['image']}" width="100">
            </a><br />
            <a href="?controller=product&id={$item['id']}/"  class="itemProductLink">{$item['name']}</a>
        </div>
    {/if}
{/foreach}
</div>

{foreach $rsChildCats as $item name=childCats}
    <h2><a href="?controller=category&id={$item['id']}/">{$item['name']}</a></h2>
{/foreach}

{*Инициализация вывода в случае отсутствия подкатегорий или товара*}
{if (!$rsProducts) && (!$rsChildCats)}
    Ничего не найдено
{/if}