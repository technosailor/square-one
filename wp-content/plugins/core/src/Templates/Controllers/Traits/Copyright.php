<?php
declare( strict_types=1 );

namespace Tribe\Project\Templates\Controllers\Traits;

trait Copyright {
	public function copyright(): string {
		return sprintf( __( '%s %d All Rights Reserved.', 'tribe' ), '&copy;', date( 'Y' ) );
	}
}
