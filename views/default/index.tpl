{* шаблон главной страницы *}






    {foreach $rsPictures as $item name=pictures}
			<div style = "float: left; padding: 0px 30px 40px 0px;">
				<a href="/pictures/{$item['ID']}/">
					<img src="/images/products/{$item['image_name']}" width="200" height="200" alt="{$item['name']}" />
				</a><br />
				<a href="pictures/{$item['ID']}/" id="openPicture" onclick="openPicture({$item['ID']}); return false">{$item['name']}</a>
			</div>
	    {if $smarty.foreach.pictures.iteration mod 5 == 0}
	    	<div style="clear: both;"></div>
	    {/if}
    {/foreach}



	
