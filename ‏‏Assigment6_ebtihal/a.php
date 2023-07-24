
<?php

// معلومات الاتصال بقاعدة البيانات
   $hn = 'localhost';
    $un = 'root';
    $pw = '';
    $db = 'expenses tracker';

try {
    // إنشاء اتصال PDO
    $conn = new PDO("mysql:host=$hn;db=$db", $un, $pw);
    // تعيين خيارات PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $date=$_POST['date'];
     $Paid_up=$_POST['Paid_up'];
     $payment_type=$_POST['payment_type'];
    // الاستعلام لإدخال بيانات في جدول
    $sql = "INSERT INTO expen (date, Paid_up, payment_type)
    VALUES ('$date', '$Paid_up', '$payment_type')";

    // استخدام الدالة exec() لإتمام العملية
    $conn->exec($sql);

    echo "تم إدخال البيانات بنجاح";
} catch(PDOException $e) {
    // عرض رسالة الخطأ في حالة فشل العملية
    echo "فشل الاتصال بقاعدة البيانات: " . $e->getMessage();
}

// إغلاق الاتصال
$conn = null;
?>

