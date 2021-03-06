<?php

namespace OpenCloud\LoadBalancer\Resources;

/**
 * sub-resource to manage content caching
 *
 * @api
 */
class ContentCaching extends SubResource {
	public
		$enabled;
    protected static
    	$json_name = "contentCaching",
    	$url_resource = "contentcaching";
    protected
    	$_create_keys = array( 'enabled' );
	public function Create($parm=array()) { $this->Update($parm); }
	public function Delete() { $this->NoDelete(); }
}
