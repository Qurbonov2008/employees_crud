<?php
// Xodimlar ro'yxatini saqlash
$xodimlar = [];

while (true) {
    // Amalni tanlash
    $amal = (int)readline("Amal kiriting (1 - Qo'shish, 2 - O'qish, 3 - Yangilash, 4 - O'chirish, 0 - Chiqish): ");
    
    if ($amal == 0) {
        break; // Dasturdan chiqish
    }
    
    // 1 - Yangi xodim qo'shish
    if ($amal == 1) {
        $idraqam = (int)readline("ID raqam kiriting: ");
        $ism = readline("Ism kiriting: ");
        $xodimlar[$idraqam] = $ism; // Xodimni ro'yxatga qo'shish
        echo "Xodim qo'shildi: ID - $idraqam, Ism - $ism\n";
    }
    
    // 2 - Xodimlar ro'yxatini ko'rsatish
    elseif ($amal == 2) {
        if (empty($xodimlar)) {
            echo "Hech qanday xodim mavjud emas.\n";
        } else {
            foreach ($xodimlar as $id => $ism) {
                echo "ID: $id, Ism: $ism\n";
            }
        }
    }
    
    // 3 - Xodimni yangilash
    elseif ($amal == 3) {
        $idraqam = (int)readline("Yangilash uchun xodimning ID raqamini kiriting: ");
        if (isset($xodimlar[$idraqam])) {
            $yangi_ism = readline("Yangi ism kiriting: ");
            $xodimlar[$idraqam] = $yangi_ism;
            echo "Xodim yangilandi: ID - $idraqam, Yangi Ism - $yangi_ism\n";
        } else {
            echo "Bunday ID raqam mavjud emas.\n";
        }
    }
    
    // 4 - Xodimni o'chirish
    elseif ($amal == 4) {
        $idraqam = (int)readline("O'chirish uchun xodimning ID raqamini kiriting: ");
        if (isset($xodimlar[$idraqam])) {
            unset($xodimlar[$idraqam]);
            echo "Xodim o'chirildi: ID - $idraqam\n";
        } else {
            echo "Bunday ID raqam mavjud emas.\n";
        }
    }
    
    else {
        echo "Noto'g'ri amal kiritildi. Iltimos, qaytadan tanlang.\n";
    }
}
?>
