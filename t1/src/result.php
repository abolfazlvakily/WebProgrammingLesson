<html>
<body>
    <script>
        <?php
        include './func.php';
        $q = $_POST["q"];
        $result = answer($q);
        ?>
        alert('<?php echo "نتیحه: "."{$result}" ?>');
        window.location.href='index.php';
    </script>
</body>
</html>