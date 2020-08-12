<?php
/**
 * ------------------------------------------------------------------------
 * JA Mixmaz Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

// No direct access
defined('_JEXEC') or die;
?>

<?php if( $this->countModules('headline') ): ?>
<div id="ja-headline">
	<jdoc:include type="modules" name="headline" style="raw" />
</div>
<?php endif; ?>

<?php if( $this->countModules('topnav') ): ?>
<div id="ja-topnav">
	<jdoc:include type="modules" name="topnav" style="raw" />
</div>
<?php endif; ?>