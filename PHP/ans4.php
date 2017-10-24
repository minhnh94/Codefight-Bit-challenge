<?php 
function mirrorBits($a) {
	bindec(array_reverse(decbin($a)));
}