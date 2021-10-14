<html>
<body>
    <script>
        <?php
        include './func.php';
        if(isset($_POST["q"])){
            $q = $_POST["q"];
            $result = answer($q);
        }
        else{
            $result = answer('Your request method is not available!');
        }
        ?>
        alert('<?php echo "نتیجه: "."{$result}" ?>');
            window.location.href='index.php';
    </script>
</body>
</html>