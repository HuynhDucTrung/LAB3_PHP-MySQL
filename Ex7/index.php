<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Hàm để tạo chuỗi ngẫu nhiên dễ đọc
    function random_string($length = 5)
    {
        // Các ký tự sử dụng để tạo chuỗi
        $vowels = 'AEIOU';
        $consonants = 'bcdfghjklmnpqrstvwxyz';
        $result = '';

        // Vòng lặp để tạo ra chuỗi có độ dài $length
        for ($i = 0; $i < $length; $i++) {
            // Nếu $i là số chẵn, chọn một phụ âm ngẫu nhiên
            // Nếu $i là số lẻ, chọn một nguyên âm ngẫu nhiên
            if ($i % 2 == 0) {
                $result .= $consonants[mt_rand(0, strlen($consonants) - 1)];
            } else {
                $result .= $vowels[mt_rand(0, strlen($vowels) - 1)];
            }
        }

        return $result;
    }

    // Hiển thị chuỗi ngẫu nhiên
    echo random_string();
    ?>
</body>

</html>