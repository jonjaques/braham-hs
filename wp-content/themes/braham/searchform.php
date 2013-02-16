<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" name="s" id="text" value="enter your search term here" onclick="if(this.value == 'enter your search term here') this.value='';" onblur="if(this.value.length == 0) this.value='enter your search term here';" />
<input name="" type="image" alt="Search" id="go" src="<?php bloginfo('stylesheet_directory'); ?>/images/form-submit.png" />
</div>
</form>