<?php

call_user_func(static function () {
    try {
        throw new Exception('first test');
    } catch (Exception $e) {  // Should warn
    }
    try {
        throw new Exception('test');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});
