{* Шаблон главной страницы *}
<h1>{$pageTitle}</h1>
<div class="row">
    {foreach $rsProducts as $item name=products}
    {if $item['status'] == 1}
    <div class="d-flex flex-column rounded itemProduct">
        <a href="?controller=product&id={$item['id']}/">
            <img src="../www/images/products/{$item['image']}">
        </a>
        <a href="?controller=product&id={$item['id']}/" class="itemProductLink">{$item['name']}</a>
    </div>
    {/if}
    {/foreach}
</div>