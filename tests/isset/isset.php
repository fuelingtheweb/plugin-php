<?php
isset($foo);
isset($veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable);
isset($bar['quux']);
isset($foo1, $foo2, $foo3);
isset($veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable, $veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable, $veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable);
isset($GLOBALS['bar']);
isset($GLOBALS[$_SESSION][$sessionVariableName]);
isset($a->a);
isset($a->a->b);
isset($veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable->veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongProperty->veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongProperty);

if (isset($var)) {
    echo "This var is set so I will print.";
}

if ( isset( $var['val1'], $var['val2'] ) && $var['val2'] === 'on' ) {
    unset( $var['val1'] );
}

$a = isset($a['pie']['a']);
$a = isset($a['pie']['a']['b']);

var_dump(isset($expected_array_got_string['some_key']));
var_dump(isset($expected_array_got_string[0]));
var_dump(isset($expected_array_got_string['0']));
var_dump(isset($expected_array_got_string[0.5]));
var_dump(isset($expected_array_got_string['0.5']));
var_dump(isset($expected_array_got_string['0 Mostel']));

$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

function foo()
{
    return isset($array['foo']) || array_key_exists('foo', $array);
}

echo isset($foo)?'yes ':'no ', isset($foo['aaaa'])?'yes ':'no ';
echo isset($veryVeryVeryVeryLongVariable)?'yes ':'no ', isset($veryVeryVeryVeryLongVariable['aaaa'])?'yes ':'no ';

class T
{
    function __isset($att)
    {
        $props = get_object_vars($this);

        return array_key_exists($att, $props);
    }
}
