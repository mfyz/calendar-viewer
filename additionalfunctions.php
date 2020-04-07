<?PHP 

function twodigits ($string) {
	if (strlen(strval($string)) == 1) $string = '0'.strval($string);
	else $string = strval($string);
	return $string;
}		

function fourdigits ($string) {
	if (strlen(strval($string)) == 3) $string = '0'.strval($string);
	else $string = strval($string);
	return $string;
}

function strmonth ($string) {
	$month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$string = $month[intval($string)-1];
	return $string;
}

function add_hyphens_to_date ($input) {
	return (substr($input, 0, 4).'-'.substr($input, 4, 2).'-'.substr($input, 6, 2));
}

function sortByStarttime($a, $b) {
    return $a['DTSTART'] - $b['DTSTART'];
}

# Thanks to user user217562 on stackoverflow for this function (https://stackoverflow.com/questions/3724111/how-can-i-convert-strings-to-an-html-color-code-hash). It's not perfect, but it is sufficient for my purposes here.
function stringToColorCode($str) {
	$code = dechex(crc32($str));
	$code = substr($code, 0, 6);
	return $code;
}
