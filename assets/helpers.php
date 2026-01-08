<?php
function formatNumbersByCommas($number){
    return number_format($number);
}

function removeCommasRecursive($input) {
    if (is_array($input)) {
        return array_map('removeCommasRecursive', $input);
    } elseif (is_string($input)) {
        return str_replace([',', '،'], '', $input);
    }
    return $input; // Return non-string, non-array types as is
}

function validateNationalCode($code): bool {
    $code = preg_replace('/[^0-9]/', '', $code); // Remove non-digits

    if (strlen($code) != 10) return false;

    // Check for repeating digits (invalid code)
    if (preg_match('/^(\d)\1{9}$/', $code)) return false;

    $sum = 0;
    for ($i = 0; $i < 9; $i++) {
        $sum += (int)$code[$i] * (10 - $i);
    }

    $remainder = $sum % 11;
    $controlDigit = ($remainder < 2) ? $remainder : 11 - $remainder;

    return isset($code[9]) && (int)$code[9] === $controlDigit;
}

// تابع برای ایجاد و اعتبارسنجی CSRF Token
function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function is_allowed_ext($ext) {
    $allowed = ['csv','xlsx','xls','vcf','txt'];
    return in_array(strtolower($ext), $allowed, true);
}
?>