<?php
function arrayPacking($a) {
	return $a[0] | $a[1] << 8 | $a[2] << 16 | $a[3] << 24;
}

echo arrayPacking([24, 85, 0]);