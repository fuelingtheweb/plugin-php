<?php
class ConstDemo
{
    const PUBLIC_CONST_A = 1;
    const TEST_CLASS_CONSTANT = 3;
    public const PUBLIC_TEST_CLASS_CONSTANT = 'value';
    protected const PROTECTED_TEST_CLASS_CONSTANT = 'value';
    private const PRIVATE_TEST_CLASS_CONSTANT = 'value';
    public const THREE = TWO + 1;
    public const ONE_THIRD = ONE / self::THREE;
    public const SENTENCE = 'The value of THREE is ' . self::THREE;

    public static function testClassConstant() {
        return self::TEST_CLASS_CONSTANT;
    }

    public function f($a = ONE + self::THREE) {
        return $a;
    }

    const CONST_1 = 1024;
    const CONST_2 = 'string';
    const CONST_3 = 11111111111111111111111111111111111111111111111111111111;
    const CONST_4 = 'veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString';
    const CONST_5 = 'string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string';
    const CONST_6 = true;
    const CONST_7 = false;
    const CONST_8 = 100 + 200 + 300 + 400 + 500 + 600 + 700 + 800 + 900 + 1000 + 1100 + 1200 + 1300;
    const CONST_9 = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;
    const CONST_10 = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD;
    const CONST_11 = ['value', 'other-value'];
    const CONST_12 = ['value', 'other-value', 'other-other-value', 'other-other-other-value'];
    const CONST_13 = ['key' => 'value', 'other-key' => 'other-value'];
    const CONST_14 = ['key' => 'value', 'other-key' => 'other-value', 'other-other-key' => 'other-other-value'];

    const FIRST = "Hello", SECOND = "world", THIRD = "!";
    const VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_FIRST = "Hello", SECOND_1 = "world", THIRD_1 = "!";
    const FIRST_1 = "Hello", VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_SECOND = "world", THIRD_2 = "!";
    const VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_FIRST_FIRST = "Hello", VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_SECOND_1 = "world", VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_FIRST_THIRD = "!";
    const CONST_15 = ['key' => 'value', 'other-key' => 'other-value', 'other-other-key' => 'other-other-value'], FOO_BAR = "test", BAR_FOOR = ['value', 'other-value'];

    const ARRAY_1 = ['value', 'other-value'], ARRAY_2 = ['value', 'other-value'];
    const STRING =
        'string' .
        'string' .
        'string' .
        'string' .
        'string' .
        'string' .
        'string' .
        'string';
    const FOOF = 'string
string
string', BAAR = 'string
string
string';
}
