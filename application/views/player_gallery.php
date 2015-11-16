<div>
Sort By: <select onchange="OrderSort(this.value);">
    {options}
    <option value="{value}">{text}</option>
    {/options}
</select>
<p><b>Currently sorting by: {ordermethod}</b></p>

Layout: <select onchange="ChangeLayout(this.value);">
    {layoutoptions}
    <option value="{value}">{text}</option>
    {/layoutoptions}
</select>

<div class="row">
    {players}
    <div class="span4">
    	<img src="/assets/images/{image}">
    	<p>{firstname} {lastname}</p>
    	<p>{playernum}</p>
    </div>
    {/players}
</div>

<div id="rosterlinks">
{links}
</div>